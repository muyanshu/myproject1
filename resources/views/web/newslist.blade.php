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
            <h5><i class="glyphicon glyphicon-home"></i>&nbsp;<a href="/list">首页</a> &raquo; <a href="#">国内</a> &raquo; 新浪</h5>
        </div>
        <!--面包屑导航 end-->
        <!--<div class="row">
            div
        </div>-->
        <div class="panel panel-default">
            <table class="table">
                <tr>
                    <th>标题</th>
                    <th>作者</th>
                    <th>更新时间</th>
                </tr>
                <tr>
                    <td>
                        <a href="#">Apple iPhone 6 Plus (A1524) 16GB 金色 移动联通电信4G手机</a>
                    </td>
                    <td>zhangsan</td>
                    <td>2014-03-15 21:11:01</td>
                </tr>
                @foreach($news as $v)
                <tr>
                    <td>
                        <a href="/list/{{$v->id}}">{{$v->name}}</a>
                    </td>
                    <td>zhangsan</td>
                    <td>{{$v->updated_at}}</td>

                </tr>
                @endforeach
            </table>
        </div>
        <div class="footer">
            {{--<!--快捷操作 start-->--}}
            {{--<div class="pull-left panel panel-danger">--}}
                {{--<div class="panel-heading">快捷操作</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<i class="glyphicon glyphicon-plus"></i>&nbsp;  <a href="#" > 新增文章</a>&nbsp;&nbsp;--}}
                    {{--<i class="glyphicon glyphicon-trash"></i>&nbsp;  <a href="#"> 批量删除</a>&nbsp;&nbsp;--}}
                    {{--<i class="glyphicon glyphicon-refresh"></i>&nbsp;  <a href="#"> 更新排序</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!--快捷操作 start-->--}}
            <!--分页实现 start-->
            <div class="pull-right">
                <nav aria-label="Page navigation">
                    {{$news->links()}}
                </nav>
            </div>
            <!--分页实现 end-->
        </div>
        <div class="clearfix"></div>
    </div>
    @include("web.newsnav")

</div>
@endsection

