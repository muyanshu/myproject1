@extends("admin.base")
@section("main")

<!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">产品管理</a> &raquo; 管理
</div>
<!--面包屑导航 结束-->

<!--结果页快捷搜索框 开始-->
<div class="search_wrap">
    <form action="" method="post">
        <table class="search_tab">

                <div style="margin-left: 50px;">选择类型:

                    <select onchange="javascript:location.href=this.value;">
                        <option value="">全部</option>
                        <option value="http://www.baidu.com">百度</option>
                        <option value="http://www.sina.com">新浪</option>
                    </select>

            关键字:
                <input type="text" name="keywords" placeholder="关键字">
                <input type="submit" name="sub" value="查询"></div>

        </table>
    </form>
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
                    <td>待付款</td>
                    <td>{{$v->created_at}}</td>
                    <td>{{$v->remark}}</td>
                    <td>
                        <a href="/admin/order/1/edit">修改</a>
                        <a href="#"  onclick="return confirm('删除后无法恢复，你确定要删除吗？');">删除</a>
                    </td>
                </tr>
                @endforeach

            </table>

            {{--<div class="page_nav">
                <div>
                    <a class="first" href="/wysls/index.php/Admin/Tag/index/p/1.html">第一页</a>
                    <a class="prev" href="/wysls/index.php/Admin/Tag/index/p/7.html">上一页</a>
                    <a class="num" href="/wysls/index.php/Admin/Tag/index/p/6.html">6</a>
                    <a class="num" href="/wysls/index.php/Admin/Tag/index/p/7.html">7</a>
                    <span class="current">8</span>
                    <a class="num" href="/wysls/index.php/Admin/Tag/index/p/9.html">9</a>
                    <a class="num" href="/wysls/index.php/Admin/Tag/index/p/10.html">10</a>
                    <a class="next" href="/wysls/index.php/Admin/Tag/index/p/9.html">下一页</a>
                    <a class="end" href="/wysls/index.php/Admin/Tag/index/p/11.html">最后一页</a>
                    <span class="rows">11 条记录</span>
                </div>
            </div>--}}
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="/admin/order?page=1" aria-label="Previous">
                            <span aria-hidden="true">首页</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/order?page={{$curr-1}}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    @foreach($page as $k=>$v)
                        @if($k==$curr)
                            <li class="active"><a href="/admin/plist?{{$v}}">{{$k}}</a></li>
                        @else
                            <li><a href="/admin/order?{{$v}}">{{$k}}</a></li>
                        @endif
                    @endforeach
                    <li>
                        <a href="/admin/order?page={{$curr+1}}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/order?page={{$max}}" aria-label="Previous">
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
@endsection