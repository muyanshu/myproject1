
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width,initial-scale=1.0" />
    <title>新闻列表</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/base.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}"/>
    <script src="{{asset('/js/jquery-1.12.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <style>
        body{
            padding-top:70px;
        }
        .num2{
            color: #BCD42A;
            margin-top:8px;
            text-align: left;
        }
    </style>
</head>

    <h2>本网站采用H5的新技术，如想正常访问，请使用IE8以上浏览器，火狐浏览器最佳。</h2>

<body class="container">
<div class="row">
    <div class="col-sm-9">
        <!--面包屑导航 start-->
        <div class="breadcrumb">
            <h5><i class="glyphicon glyphicon-home"></i>&nbsp;<a href="#">视频中心<b>&colon;</b> </a> 可在导航顶部搜索全部视频资源</h5>
        </div>
        <!--面包屑导航 end-->
        <!--<div class="row">
            div
        </div>-->
        <div class="panel panel-default">
            <div class="media">
                {{--视频模块 start--}}
                <a href="#" class="media-left">
                <video src="{{asset('img/video/MIUI9.mp4')}}" height="200" controls preload="metadata"></video>
                </a>
                {{--视频模块 end--}}
                {{--右侧 产品介绍 start--}}
                    <div class="media-body text-center">
                    <h4 class="media-heading" style="margin-top:5px;">Bootstrap快速入门第一课</h4><br/>
                            &nbsp;&nbsp;<button class="btn btn-info">VIP讲义、代码案例、对应试题下载</button>
                             <br />
                            <dd>
                                原价：¥ <span class="novalid">300</span>   限时优惠：¥ <span style="color:#ff6700">99</span><br /><br />
                                <a class="num">观看次数：</a><a>21</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a><span class="num">评价：</span></a><a>16</a>
                            </dd><br />
                            <p>
                                <a href="#" class="btn btn-info" role="button">加入购物车</a>
                                <a href="#" class="btn btn-default" role="button">立即购买</a>
                            </p>
                        </div>
                        <br/><br/><br/>
                        <div class="media-footer">
                           <h3>视频简介：<small class="lead"> Bootstrap快速入门第一课，只是帮大家快速了解，具体的后续深入学习，可以在导航栏的视频教程观看。</small></h3>
                        <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">本视频详情</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">相关课程</a></li>
                                <li role="presentation" class="active"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">学员评论</a></li>
                                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">购买排行榜</a></li>
                            </ul>

                            <!-- Tab content -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane" id="home">
                                    {{--本视频详情 start--}}
                                   <h4 class="text-center">Bootstrap快速入门第一课，只是帮大家快速了解，具体的后续深入学习，
                                       可以在导航栏的视频教程观看。<a href="#">...深入视频详情点击</a>
                                   </h4>
                                    {{--本视频详情 end--}}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    {{--相关课程 start--}}
                                    <div class="text-center">
                                        <p><a href="#">PHP基础</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">PHP面向对象</a></p>
                                        <p><a href="#">PHP核心API</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Laravel</a></p>
                                    </div>
                                    {{--相关课程 end--}}
                                </div>
                                <div role="tabpanel" class="tab-pane active" id="messages">
                                    {{--学员评论 start--}}
                                    <ul class="list-group">
                                            <h5 class="num2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;文明上网，请客观
                                                评价您观看视频后的感受，希望您提出宝贵的意见，您的反馈是我们前进的
                                                动力！！
                                            </h5>
                                        {{--星星的动态效果 未实现 start--}}
                                            <h3 class="text-center" id="stars">星星
                                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                            </h3>
                                        {{--星星的动态效果 未实现 start--}}
                                        <p class="text-center">
                                        <textarea name="discuss" id="" cols="78%" rows="3"></textarea>
                                        </p>
                                        <li class="text-center">
                                            <button type="button" class="btn btn-success">提交</button>
                                            <button type="button" class="btn btn-info" onclick="javascript:location.reload();">重填</button>
                                        </li>
                                 </ul>
                                {{--学员评论 end--}}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="settings">
                                    <div class="container">
                                    {{--购买排行榜 start--}}
                                    <div class="row" style=" margin-top:15px;">
                                    <div class="col-sm-1">
                                        <b><span class="text-success">Laravel</span></b>
                                    </div>
                                    <!--Laravel进度条开始-->
                                    <div class="col-sm-11">
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" style="width: 52%;"></div>
                                        </div>
                                    </div>
                                    <!--Laravel进度条结束-->
                                </div>
                                <div class="row">
                                    <div class="col-sm-1">
                                        <b><span class="text-info">PHP</span></b>
                                    </div>
                                    <!--PHP进度条开始-->
                                    <div class="col-sm-11">
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" style="width: 50%;"></div>
                                        </div>
                                    </div>
                                    <!--PHP进度条结束-->
                                </div>
                                <div class="row">
                                    <div class="col-sm-1">
                                        <b><span class="text-warning">MySql</span></b>
                                    </div>
                                    <!--MySql进度条开始-->
                                    <div class="col-sm-11">
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" style="width: 53%;"></div>
                                        </div>
                                    </div>
                                    <!--MySql进度条结束-->
                                </div>
                                    {{--购买排行榜 end--}}
                                </div>
                                </div>
                                </div>
                            </div>
                            {{--Tab end--}}
                        </div>
                {{--右侧 产品介绍 end--}}
            </div>
            </div>


    <div class="col-sm-3">
        <div class="panel-group" id="myAccordion">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">全部班型介绍</div>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a href="#collapseOne" data-toggle="collapse"
                           data-parent="#myAccordion" style="display: block;">大前端技术前沿</a>
                    </div>
                </div>
                <div class="panel-collapse collapse" id="collapseOne">
                    <ul class="list-group">
                        <li class="list-group-item">1111</li>
                        <li class="list-group-item">1111</li>
                        <li class="list-group-item">1111</li>
                        <li class="list-group-item">1111</li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a href="#collapseOne" data-toggle="collapse"
                           data-parent="#myAccordion" style="display: block;">后台技术前沿</a>
                    </div>
                </div>
                <div class="panel-collapse collapse" id="collapseOne">
                    <ul class="list-group">
                        <li class="list-group-item">1111</li>
                        <li class="list-group-item">1111</li>
                        <li class="list-group-item">1111</li>
                        <li class="list-group-item">1111</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="list-group">
            <a href="#" class="list-group-item active">
                <h4 class="list-group-item-heading">
                    报名热线
                </h4>
            </a>
            <a href="#" class="list-group-item">
                <h5 class="list-group-item-heading">
                  报名:<code>11月11日当日报名，立享优惠+++</code>
                </h5>
            </a>
            <a href="#" class="list-group-item">
                <h5 class="list-group-item-heading">
                    支付: <code>微信或支付宝</code>
                </h5>
            </a>
            <a href="#" class="list-group-item">
                <h5 class="list-group-item-heading">
                  我们提供 <code>24*7</code>在线咨询和技术支持。
                </h5>
            </a>
            <a href="#" class="list-group-item">
                <h5 class="list-group-item-heading">
                    官方报名方式: 任何问题可联系QQ：303030
                </h5>
            </a>
            <a href="#" class="list-group-item">
                <p class="list-group-item-heading">
                    VIP账号各大淘宝均可购买，官方支持分期付款
                </p>
            </a>
            <a href="#" class="list-group-item">
                <p class="list-group-item-heading">
                    <code>官网:http://www.phpzgr.com</code>
                </p>
            </a>
        </div>
    </div>
</div>
<footer class="navbar-default navbar-fixed-bottom text-center">版权信息</footer>
</body>
</html>

