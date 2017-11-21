@extends('web.base')
{{--标题--}}
@section('title')
    新闻博客
@endsection

{{--主体内容--}}
@section('content')
    <style>

        table th{
            text-align: center;
        }
        table tr{
            vertical-align:middle;
        }
        .tc input{
            width:30px;
            text-align: center;
        }
        table tr td{
            text-align: center;
            vertical-align: middle !important;
        }
        table tr th{
            vertical-align: middle !important;
        }
    </style>

<div class="row">
    <div class="col-sm-9">
        <!--面包屑导航 start-->
        <div class="breadcrumb">
            <h5><i class="glyphicon glyphicon-home"></i>&nbsp;<a href="#">首页</a> &raquo; <a href="#">国内</a> &raquo; 新浪</h5>
        </div>
        <!--面包屑导航 end-->
        <!--<div class="row">
            div
        </div>-->
        <div class="panel panel-default">
            <table class="table">
                <tr>
                    <th>排序</th>
                    <th>ID</th>
                    <th>标题</th>
                    <th>点击</th>
                    <th>发布人</th>
                    <th>更新时间</th>
                </tr>
                <tr>
                    <td class="tc">
                        <input type="text" name="ord[]" value="0">
                    </td>
                    <td>1</td>
                    <td>
                        <a href="#">Apple iPhone 6 Plus (A1524) 16GB 金色 移动联通电信4G手机</a>
                    </td>
                    <td name="views">2</td>
                    <td>zhangsan</td>
                    <td>2014-03-15 21:11:01</td>
                </tr>
                <tr>
                    <td class="tc">
                        <input type="text" name="ord[]" value="1">
                    </td>
                    <td>2</td>
                    <td>
                        <a href="#">Apple iPhone 6 Plus (A1524) 16GB 金色 移动联通电信4G手机</a>
                    </td>
                    <td name="views">2</td>
                    <td>zhangsan</td>
                    <td>2014-03-15 21:11:01</td>
                </tr>
                <tr>
                    <td class="tc">
                        <input type="text" name="ord[]" value="2">
                    </td>
                    <td>3</td>
                    <td>
                        <a href="#">Apple iPhone 6 Plus (A1524) 16GB 金色 移动联通电信4G手机</a>
                    </td>
                    <td name="views">2</td>
                    <td>zhangsan</td>
                    <td>2014-03-15 21:11:01</td>
                </tr>
                <tr>
                    <td class="tc">
                        <input type="text" name="ord[]" value="3">
                    </td>
                    <td>4</td>
                    <td>
                        <a href="#">Apple iPhone 6 Plus (A1524) 16GB 金色 移动联通电信4G手机</a>
                    </td>
                    <td name="views">2</td>
                    <td>zhangsan</td>
                    <td>2014-03-15 21:11:01</td>
                </tr>
                <tr>
                    <td class="tc">
                        <input type="text" name="ord[]" value="4">
                    </td>
                    <td>5</td>
                    <td>
                        <a href="#">Apple iPhone 6 Plus (A1524) 16GB 金色 移动联通电信4G手机</a>
                    </td>
                    <td name="views">2</td>
                    <td>zhangsan</td>
                    <td>2014-03-15 21:11:01</td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <!--快捷操作 start-->
            <div class="pull-left panel panel-danger">
                <div class="panel-heading">快捷操作</div>
                <div class="panel-body">
                    <i class="glyphicon glyphicon-plus"></i>&nbsp;  <a href="#" > 新增文章</a>&nbsp;&nbsp;
                    <i class="glyphicon glyphicon-trash"></i>&nbsp;  <a href="#"> 批量删除</a>&nbsp;&nbsp;
                    <i class="glyphicon glyphicon-refresh"></i>&nbsp;  <a href="#"> 更新排序</a>
                </div>
            </div>
            <!--快捷操作 start-->
            <!--分页实现 start-->
            <div class="pull-right">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-lg">
                        <li class="disabled">
                            <a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
                        </li>
                        <li class="active"><a href="#">1
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li><a href="#">2
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li><a href="#">3
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li><a href="#">4
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--分页实现 end-->
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-info">
            <div class="panel-heading">国内新闻</div>
            <div class="panel-body list-group">
                <!--<div class="">-->
                <a href="#" class="list-group-item">新浪</a>
                <a href="#" class="list-group-item">搜狐</a>
                <a href="#" class="list-group-item">乐视</a>
                <!--</div>-->
            </div>
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">国际新闻</div>
            <div class="panel-body list-group">
                <!--<div class="">-->
                <a href="#" class="list-group-item">国际经济新闻</a>
                <a href="#" class="list-group-item">国际体育新闻</a>
                <a href="#" class="list-group-item">国际环球资讯</a>
                <!--</div>-->
            </div>
        </div>
        <div class="panel panel-danger">
            <div class="panel-heading">焦点事件</div>
            <div class="panel-body">涉及国内外的新闻</div>
        </div>
    </div>

</div>
@endsection

