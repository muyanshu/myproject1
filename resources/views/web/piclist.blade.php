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
    <style>
        body{
            padding-top:50px;
        }
    </style>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
                <!--面包屑导航 start-->
                <div class="breadcrumb">
                    <h5><i class="glyphicon glyphicon-home"></i>&nbsp;<a href="#">首页</a>  &raquo;店长推荐</h5>
                </div>
                <!--面包屑导航 end-->
              {{--  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
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
                </div>--}}
                <div class="media">
                    <a href="#" class="media-left">
                        <img src="{{asset('img/products-pic/taoci1.jpg')}}" alt="陶瓷1">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading text-center">樱桃小丸子</h4><br/>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;五千年中华文明史里，
                                想选出一个最强的朝代，可能众说纷纭，汉、唐、明、清，各有各的威武
                                与富足。若想选出一个最美的朝代，答案就很简单——宋代。那是一个属
                                于艺术的时代。宋代诗词，把中国古代汉语的美发展到极致；宋代书画，
                                代表了中国文人的最高审美；而宋代的瓷器，则是中国古代陶瓷艺术的巅峰。
                                <a href="#">...详情点击</a>
                            </p>
                    </div>
                </div>
            <div class="media">
                <a href="#" class="media-left">
                    <img src="{{asset('img/products-pic/taoci1.jpg')}}" alt="陶瓷1">
                </a>
                <div class="media-body">
                    <h4 class="media-heading text-center">樱桃小丸子</h4><br/>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;五千年中华文明史里，
                        想选出一个最强的朝代，可能众说纷纭，汉、唐、明、清，各有各的威武
                        与富足。若想选出一个最美的朝代，答案就很简单——宋代。那是一个属
                        于艺术的时代。宋代诗词，把中国古代汉语的美发展到极致；宋代书画，
                        代表了中国文人的最高审美；而宋代的瓷器，则是中国古代陶瓷艺术的巅峰。
                        <a href="#">...详情点击</a>
                    </p>
                </div>
            </div>
            <div class="media">
                <a href="#" class="media-left">
                    <img src="{{asset('img/products-pic/taoci1.jpg')}}" alt="陶瓷1">
                </a>
                <div class="media-body">
                    <h4 class="media-heading text-center">樱桃小丸子</h4><br/>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;五千年中华文明史里，
                        想选出一个最强的朝代，可能众说纷纭，汉、唐、明、清，各有各的威武
                        与富足。若想选出一个最美的朝代，答案就很简单——宋代。那是一个属
                        于艺术的时代。宋代诗词，把中国古代汉语的美发展到极致；宋代书画，
                        代表了中国文人的最高审美；而宋代的瓷器，则是中国古代陶瓷艺术的巅峰。
                        <a href="#">...详情点击</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
</body>

</html>