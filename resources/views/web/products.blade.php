<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"/>
    <script src="{{asset('/js/jquery-1.12.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <!--  [if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--轮播图 start-->
    <style>
        body {
            padding-top: 50px;
        }
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
            $("#a_pop").popover(); //点击，弹出查看详情对话框
        });
    </script>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <div class="row">
                <!--面包屑导航 start-->
                <div class="breadcrumb">
                    <h5><i class="glyphicon glyphicon-home"></i>&nbsp;<a href="#">首页</a>  &raquo; 全部陶瓷产品介绍</h5>
                </div>
                <!--面包屑导航 end-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <!-- 大屏幕放3张略缩图，pc端放4张，平板和手机放6张-->
                    <div class="thumbnail">
                        <img src="{{asset('img/products-pic/taoci1.jpg')}}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h4>vivo X9s Plus</h4>
                            &nbsp;&nbsp;"磁器"代窑器是由磁州窑产量最多所致。
                            <font color="#fe0000">仿佳士得拍卖品，做工精细</font>
                            <a href="javascript:void(0)" id="a_pop" data-placement="right" data-content="景德镇精品雍正款粉彩孔雀富贵瓶仿佳士得拍卖品，做工精细景德镇精
										品雍正款粉彩孔雀富贵瓶" data-original-title="时间煮雨">...详情点击</a>
                            <br />
                            <dd>
                                批发价：¥ <span style="color:#ff6700">539</span><em class="num"><span>3502</span>人已买 </em><br />市场价：¥ <span class="novalid">802.50</span><br />
                                <a href="#">货　号 CS-YP-184 </a><br />
                            </dd><br />
                            <p>
                                <a href="#" class="btn btn-info" role="button">加入购物车</a>
                                <a href="#" class="btn btn-default" role="button">购买</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <!-- 大屏幕放3张略缩图，pc端放4张，平板和手机放6张-->
                    <div class="thumbnail">
                        <img src="{{asset('/img/products-pic/taoci1.jpg')}}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h4>vivo X9s Plus</h4>
                            &nbsp;&nbsp;"磁器"代窑器是由磁州窑产量最多所致。
                            <font color="#fe0000">仿佳士得拍卖品，做工精细</font>
                            <a href="javascript:void(0)" id="a_pop" data-placement="right" data-content="景德镇精品雍正款粉彩孔雀富贵瓶仿佳士得拍卖品，做工精细景德镇精
										品雍正款粉彩孔雀富贵瓶" data-original-title="时间煮雨">...详情点击</a>
                            <br />
                            <dd>
                                批发价：¥ <span style="color:#ff6700">539</span><em class="num"><span>3502</span>人已买 </em><br />市场价：¥ <span class="novalid">802.50</span><br />
                                <a href="#">货　号 CS-YP-184 </a><br />
                            </dd><br />
                            <p>
                                <a href="#" class="btn btn-info" role="button">加入购物车</a>
                                <a href="#" class="btn btn-default" role="button">购买</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <!-- 大屏幕放3张略缩图，pc端放4张，平板和手机放6张-->
                    <div class="thumbnail">
                        <img src="{{asset('/img/products-pic/taoci1.jpg')}}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h4>vivo X9s Plus</h4>
                            &nbsp;&nbsp;"磁器"代窑器是由磁州窑产量最多所致。
                            <font color="#fe0000">仿佳士得拍卖品，做工精细</font>
                            <a href="javascript:void(0)" id="a_pop" data-placement="right" data-content="景德镇精品雍正款粉彩孔雀富贵瓶仿佳士得拍卖品，做工精细景德镇精
										品雍正款粉彩孔雀富贵瓶" data-original-title="时间煮雨">...详情点击</a>
                            <br />
                            <dd>
                                批发价：¥ <span style="color:#ff6700">539</span><em class="num"><span>3502</span>人已买 </em><br />市场价：¥ <span class="novalid">802.50</span><br />
                                <a href="#">货　号 CS-YP-184 </a><br />
                            </dd><br />
                            <p>
                                <a href="#" class="btn btn-info" role="button">加入购物车</a>
                                <a href="#" class="btn btn-default" role="button">购买</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <!-- 大屏幕放3张略缩图，pc端放4张，平板和手机放6张-->
                    <div class="thumbnail">
                        <img src="{{asset('/img/products-pic/taoci1.jpg')}}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h4>vivo X9s Plus</h4>
                            &nbsp;&nbsp;"磁器"代窑器是由磁州窑产量最多所致。
                            <font color="#fe0000">仿佳士得拍卖品，做工精细</font>
                            <a href="javascript:void(0)" id="a_pop" data-placement="right" data-content="景德镇精品雍正款粉彩孔雀富贵瓶仿佳士得拍卖品，做工精细景德镇精
										品雍正款粉彩孔雀富贵瓶" data-original-title="时间煮雨">...详情点击</a>
                            <br />
                            <dd>
                                批发价：¥ <span style="color:#ff6700">539</span><em class="num"><span>3502</span>人已买 </em><br />市场价：¥ <span class="novalid">802.50</span><br />
                                <a href="#">货　号 CS-YP-184 </a><br />
                            </dd><br />
                            <p>
                                <a href="#" class="btn btn-info" role="button">加入购物车</a>
                                <a href="#" class="btn btn-default" role="button">购买</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <!-- 大屏幕放3张略缩图，pc端放4张，平板和手机放6张-->
                    <div class="thumbnail">
                        <img src="{{asset('/img/products-pic/taoci1.jpg')}}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h4>vivo X9s Plus</h4>
                            &nbsp;&nbsp;"磁器"代窑器是由磁州窑产量最多所致。
                            <font color="#fe0000">仿佳士得拍卖品，做工精细</font>
                            <a href="javascript:void(0)" id="a_pop" data-placement="right" data-content="景德镇精品雍正款粉彩孔雀富贵瓶仿佳士得拍卖品，做工精细景德镇精
										品雍正款粉彩孔雀富贵瓶" data-original-title="时间煮雨">...详情点击</a>
                            <br />
                            <dd>
                                批发价：¥ <span style="color:#ff6700">539</span><em class="num"><span>3502</span>人已买 </em><br />市场价：¥ <span class="novalid">802.50</span><br />
                                <a href="#">货　号 CS-YP-184 </a><br />
                            </dd><br />
                            <p>
                                <a href="#" class="btn btn-info" role="button">加入购物车</a>
                                <a href="#" class="btn btn-default" role="button">购买</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <!-- 大屏幕放3张略缩图，pc端放4张，平板和手机放6张-->
                    <div class="thumbnail">
                        <img src="{{asset('/img/products-pic/taoci1.jpg')}}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h4>vivo X9s Plus</h4>
                            &nbsp;&nbsp;"磁器"代窑器是由磁州窑产量最多所致。
                            <font color="#fe0000">仿佳士得拍卖品，做工精细</font>
                            <a href="javascript:void(0)" id="a_pop" data-placement="right" data-content="景德镇精品雍正款粉彩孔雀富贵瓶仿佳士得拍卖品，做工精细景德镇精
										品雍正款粉彩孔雀富贵瓶" data-original-title="时间煮雨">...详情点击</a>
                            <br />
                            <dd>
                                批发价：¥ <span style="color:#ff6700">539</span><em class="num"><span>3502</span>人已买 </em><br />市场价：¥ <span class="novalid">802.50</span><br />
                                <a href="#">货　号 CS-YP-184 </a><br />
                            </dd><br />
                            <p>
                                <a href="#" class="btn btn-info" role="button">加入购物车</a>
                                <a href="#" class="btn btn-default" role="button">购买</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <!-- 大屏幕放3张略缩图，pc端放4张，平板和手机放6张-->
                    <div class="thumbnail">
                        <img src="{{asset('/img/products-pic/taoci1.jpg')}}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h4>vivo X9s Plus</h4>
                            &nbsp;&nbsp;"磁器"代窑器是由磁州窑产量最多所致。
                            <font color="#fe0000">仿佳士得拍卖品，做工精细</font>
                            <a href="javascript:void(0)" id="a_pop" data-placement="right" data-content="景德镇精品雍正款粉彩孔雀富贵瓶仿佳士得拍卖品，做工精细景德镇精
										品雍正款粉彩孔雀富贵瓶" data-original-title="时间煮雨">...详情点击</a>
                            <br />
                            <dd>
                                批发价：¥ <span style="color:#ff6700">539</span><em class="num"><span>3502</span>人已买 </em><br />市场价：¥ <span class="novalid">802.50</span><br />
                                <a href="#">货　号 CS-YP-184 </a><br />
                            </dd><br />
                            <p>
                                <a href="#" class="btn btn-info" role="button">加入购物车</a>
                                <a href="#" class="btn btn-default" role="button">购买</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <!-- 大屏幕放3张略缩图，pc端放4张，平板和手机放6张-->
                    <div class="thumbnail">
                        <img src="{{asset('/img/products-pic/taoci1.jpg')}}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h4>vivo X9s Plus</h4>
                            &nbsp;&nbsp;"磁器"代窑器是由磁州窑产量最多所致。
                            <font color="#fe0000">仿佳士得拍卖品，做工精细</font>
                            <a href="javascript:void(0)" id="a_pop" data-placement="right" data-content="景德镇精品雍正款粉彩孔雀富贵瓶仿佳士得拍卖品，做工精细景德镇精
										品雍正款粉彩孔雀富贵瓶" data-original-title="时间煮雨">...详情点击</a>
                            <br />
                            <dd>
                                批发价：¥ <span style="color:#ff6700">539</span><em class="num"><span>3502</span>人已买 </em><br />市场价：¥ <span class="novalid">802.50</span><br />
                                <a href="#">货　号 CS-YP-184 </a><br />
                            </dd><br />
                            <p>
                                <a href="#" class="btn btn-info" role="button">加入购物车</a>
                                <a href="#" class="btn btn-default" role="button">购买</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

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

</body>

</html>