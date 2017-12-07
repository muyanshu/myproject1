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
        <div class="panel panel-default"  style="padding: 10px">
            <table class="table">
                <div class="breadcrumb">
                    <h3 style="text-align:center">{{$news->name}}</h3>
                    </div>
                    <strong>文章内容：</strong>
                <h5>{!! $news->detail !!}</h5>
                <div >
                    @if($pre)<a href="{{$pre->id}}">上一篇：{{$pre->name}}&nbsp&nbsp&nbsp</a>
                        @else
                    <span >已经是最上一篇</span>
                        @endif
                        @if($next)
                            <a href="{{$next->id}}">&nbsp&nbsp&nbsp下一篇：{{$next->name}}</a>
                        @else
                            <span >已经是最下一篇</span>
                        @endif
                </div>
            </table>
        </div>

        <div class="clearfix"></div>
    </div>
    @include("web.newsnav")

</div>
@endsection

