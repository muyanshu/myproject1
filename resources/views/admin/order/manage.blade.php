<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{--  <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="/js/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="/css/app.css">
    <script type="text/javascript" src="/js/jQuery-form.js"></script>
    <script src="/js/app.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/css/ch-ui.admin.css">
    <link rel="stylesheet" href="/fonts/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    {{--<script type="text/javascript" src="/js/jquery.js"></script>--}}
    {{--<script type="text/javascript" src="/js/ch-ui.admin.js"></script>--}}
    {{--<script type="text/javascript" src="js/bootstrap.min.js"></script>--}}

    {{--引用编辑器--}}
    <script type="text/javascript" src="/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

    <title>@yield("title","后台管理")</title>
    <style>
        .add_tab td{
            width:150px !important;
        }
    </style>
</head>
<body>

{{--头部--}}
@include("admin.header")

{{--左边导航--}}
@include("admin.nav")
<!--主体部分 开始-->
<div class="main_box" style="overflow:auto;">
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="/admin">首页</a> &raquo; <a href="/admin/order">订单管理</a> &raquo; 管理
    </div>
    <!--面包屑导航 结束-->

    <!--结果页快捷搜索框 开始-->
    <div class="search_wrap">

        <table class="search_tab">
            <form class="form-group form-inline" action="">
                <div style="margin-left: 30px;">选择类型:
                    <select onchange="javascript:location.href=this.value;">
                        <option value="">全部</option>
                        <option value="http://www.baidu.com">百度</option>
                        <option value="http://www.sina.com">新浪</option>
                    </select>
                    关键字:
                    <input type="text" name="search" placeholder="关键字">
                    <input type="submit" class="btn btn-primary" value="查询">
                </div>

            </form>
        </table>

    </div>
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <div class="result_title">
                <h3>快捷操作</h3>
            </div>
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="#"><i class="fa fa-plus"></i>新增产品</a>
                    <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                    <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="panel panel-info">
            <div class="panel-body">
                <table class="list_tab">
                    <tr>
                        <th class="tc" width="5%"><input type="checkbox" name=""></th>
                        <th class="tc">排序</th>
                        <th class="tc">订单ID</th>
                        <th>订购人</th>
                        <th>商品名称</th>
                        <th>总价格</th>
                        <th>状态</th>
                        <th>更新时间</th>
                        <th>备注</th>
                        <th>操作</th>
                    </tr>
                    @foreach($rs as $v)
                        <tr>
                            <td class="tc"><input type="checkbox" name="id[]" value="59"></td>
                            <td class="tc">
                                <input type="text" name="ord[]" value="{{$v->id}}">
                            </td>
                            <td class="tc">{{$v->ordernumber}}</td>
                            <td>
                                <a href="#">{{$v->username}}</a>
                            </td>
                            <td>{{$v->product_name}}</td>
                            <td style="color: red">{{$v->price}}元</td>
                            <td>
                                @if($v->status==1)
                                    待付款
                                @else
                                    已付款
                                @endif
                            </td>
                            <td>{{$v->created_at}}</td>
                            <td>{{$v->remark}}</td>
                            <td>
                                <a href="/admin/orderedit/{{$v->id}}">修改</a>
                                <a class="delEvent" href="" data-toggle="modal" id="{{$v->id}}btn" data-target="#myDelModal">删除</a>
                            </td>
                        </tr>
                    @endforeach

                </table>

                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="/admin/order?{{$search}}page=1" aria-label="Previous">
                                <span aria-hidden="true">首页</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/order?{{$search}}page={{$curr-1}}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        @foreach($page as $k=>$v)
                            @if($k==$curr)
                                <li class="active"><a href="/admin/order?{{$search}}{{$v}}">{{$k}}</a></li>
                            @else
                                <li><a href="/admin/order?{{$search}}{{$v}}">{{$k}}</a></li>
                            @endif
                        @endforeach
                        <li>
                            <a href="/admin/order?{{$search}}page={{$curr+1}}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/order?{{$search}}page={{$max}}" aria-label="Previous">
                                <span aria-hidden="true">尾页</span>
                            </a>
                        </li>
                        <li>
                            <span aria-hidden="true">总计{{$max}}页</span>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
    {{--@endsection--}}
</div>
<!--主体部分 结束-->

{{--尾部--}}
@include("admin.footer")
<div id="myDelModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">警告</h4>
            </div>
            <div class="modal-body">
                <p>删除后将无法恢复，你确定删除吗？</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button id="delbtn" type="button" class="btn btn-primary">确定删除</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<input type="hidden" name="_token" value="{{csrf_token()}}">
<script>
    id=0;
    $(".delEvent").click(function(){
        id=parseInt(this.id)
    })
    /*$("#myDelModal").on('hidden.bs.modal',function (e) {

    })*/
    $("#delbtn").click(function(){
        $.ajax({
            url:"/admin/orderdel",
            type:"post",
            data:{'id':id,'_token':$('input[name=_token]').val()},
            success:function (data) {
                $("#"+id+"btn").parent().parent().remove();
                alert(data);
                $('#myDelModal').modal("hide");
            }
        })
    })
</script>
</body>
</html>

{{--@extends("admin.base")
@section("main")--}}



{{----}}


