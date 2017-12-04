@extends('web.base')
{{--标题--}}
@section('title')
    商城
    @endsection

{{--主体内容--}}
@section('content')

    <![endif]-->
    <!--轮播图 start-->
    <style>

        .thumbnail {
            /*使产品图片铺满*/
            padding: 0 !important;
        }
        .num{
            float: right;
            color: #999;
            font-size: 8px;
            margin-top:4px;
        }
        .novalid {
            /*市场价，划掉*/
            text-decoration: line-through;
        }
        .popover-content {
            /*弹出内容样式*/
            width: 150px !important;
        }

    </style>
    <script>
        $(document).ready(function() {
            $('#myCarousel').carousel({ interval: 2000 }); //每隔5秒自动轮播
            $(".a_pop").popover(); //点击，弹出查看详情对话框

        });
    </script>


    <div class="row">
        <div class="col-sm-9">
            <div class="row">
                <!--面包屑导航 start-->
                <div class="breadcrumb">
                    <i class="glyphicon glyphicon-home"></i>&nbsp;<a href="/">首页</a>  &raquo; 全部陶瓷产品介绍
                    <span style="margin-left: 65%;">
                            <a href="/car/show"><button class="btn btn-info btn-sm">我的购物车</button></a>
                    </span>
                </div>
                <!--面包屑导航 end-->
                @foreach($rs as $v)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <!-- 大屏幕放3张略缩图，pc端放4张，平板和手机放6张-->
                    <div class="thumbnail">
                        <img src="{{asset('img/products-pic/taoci1.jpg')}}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h4>{{$v->name}}</h4>
                            &nbsp;&nbsp;"磁器"代窑器是由磁州窑产量最多所致。
                            <font color="#fe0000">仿佳士得拍卖品，做工精细</font>
                            <a href="javascript:void(0)" class="a_pop" data-placement="right" data-content="{{$v->detail}}" data-original-title="时间煮雨">...详情点击</a>
                            <br />
                            <dd>
                                批发价：¥ <span style="color:#ff6700">{{$v->price}}</span><em class="num"><span>3502</span>人已买 </em><br /><span>市场价：¥</span><span class="novalid">{{$v->value}}</span><br />
                                <a href="#">货　号 CS-YP-184 </a><br />
                            </dd><br />
                            <p>
                                <a href="/car/add/{{$v->id}}" class="btn btn-info" role="button">加入购物车</a>
                                <a href="/car/zpay/{{$v->id}}" class="btn btn-default" role="button">购买</a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="/products?page=1" aria-label="Previous">
                            <span aria-hidden="true">首页</span>
                        </a>
                    </li>
                    <li>
                        <a href="/products?page={{$curr-1}}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    @foreach($page as $k=>$v)
                        @if($k==$curr)
                            <li class="active"><a href="/products?{{$v}}">{{$k}}</a></li>
                        @else
                            <li><a href="/products?{{$v}}">{{$k}}</a></li>
                        @endif
                    @endforeach
                    <li>
                        <a href="/products?page={{$curr+1}}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    <li>
                        <a href="/products?page={{$max}}" aria-label="Previous">
                            <span aria-hidden="true">尾页</span>
                        </a>
                    </li>
                    <li>
                        <span aria-hidden="true">总计{{$max}}页</span>
                    </li>

                </ul>
            </nav>

        </div>
        <div class="col-sm-3">
            <div class="panel-group" id="myAccordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <a href="#collapseOne" data-toggle="collapse"
                               data-parent="#myAccordion" style="display: block;">瓷瓶</a>
                        </div>
                    </div>
                    <div class="panel-collapse collapse.in" id="collapseOne">
                        <ul class="list-group">
                            <li class="list-group-item">1111</li>
                            <li class="list-group-item">1111</li>
                            <li class="list-group-item">1111</li>
                            <li class="list-group-item">1111</li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <a href="#collapseTwo" data-toggle="collapse"
                               data-parent="#myAccordion" style="display: block;">瓷壶</a>
                        </div>
                    </div>
                    <div class="panel-collapse collapse.in" id="collapseTwo">
                        <ul class="list-group">
                            <li class="list-group-item">222</li>
                            <li class="list-group-item">222</li>
                            <li class="list-group-item">222</li>
                            <li class="list-group-item">222</li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <a href="#collapseThree" data-toggle="collapse"
                               data-parent="#myAccordion" style="display: block;">瓷盘</a>
                        </div>
                    </div>
                    <div class="panel-collapse collapse" id="collapseThree">
                        <ul class="list-group">
                            <li class="list-group-item">333</li>
                            <li class="list-group-item">333</li>
                            <li class="list-group-item">333</li>
                            <li class="list-group-item">333</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection