<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width,initial-scale=1.0" />
    <title>简介页面---Resume</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/base.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}"/>
    <script src="{{asset('/js/jquery-1.12.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <style>
        body{
            padding-top:70px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('#divCarousel').carousel({interval:2000});//每隔5秒自动轮播
            $('.panel-title').click(function(){$(this).find('span').toggleClass('glyphicon-chevron-up')});
        });

    </script>
</head>
<body class="container">
<div class="row">
    <!--左栏 start-->
    <div class="col-sm-9">
        <!--文字简介信息 start-->
        <div class="jumbotron">
            <h3>瓷器</h3>
            <p>中国是瓷器的故乡，瓷器是汉族劳动人民的一个重要的创造。谢肇制在《五杂俎》
                记载:"今俗语窑器谓之磁器者，盖磁州窑最多，故相延名之，如银称米提，墨称腴糜之类也。
                "当时出现的以"磁器"代窑器是由磁州窑产量最多所致。这是迄今发现最早使用瓷器称谓的史料。
                <a href="#">详情</a></p>
        </div>
        <!--文字简介信息 end-->
        <!--主体的版块 start-->
        <div class="panel-group" id="accordion">
            <div class="panel panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                            <h3>工作经历<span class="glyphicon glyphicon-chevron-right pull-right"></span></h3></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--工作经历 折叠内容start-->
                <div id="collapseOne" class="panel-collapse collapse.in">
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-danger lead">
                                <div class="row">
                                    <div class="col-sm-4">2003/01-2004/01</div>
                                    <div class="col-sm-4">单位名称1</div>
                                    <div class="col-sm-4">职位1</div>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-danger lead">
                                <div class="row">
                                    <div class="col-sm-4">2005/01-2006/01</div>
                                    <div class="col-sm-4">单位名称2</div>
                                    <div class="col-sm-4">职位2</div>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-danger lead">
                                <div class="row">
                                    <div class="col-sm-4">2007/01-至今</div>
                                    <div class="col-sm-4">单位名称3</div>
                                    <div class="col-sm-4">职位3</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--工作经历 折叠内容end-->
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a href="#collapseTwo" data-toggle="collapse" data-parent="#accordion">
                            <h3>学习经历<span class="glyphicon glyphicon-chevron-right pull-right"></span></h3></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--学习经历start-->
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-danger lead">
                                <div class="row">
                                    <div class="col-sm-4">2003/01-2004/01</div>
                                    <div class="col-sm-4">单位名称1</div>
                                    <div class="col-sm-4">职位1</div>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-danger lead">
                                <div class="row">
                                    <div class="col-sm-4">2005/01-2006/01</div>
                                    <div class="col-sm-4">单位名称2</div>
                                    <div class="col-sm-4">职位2</div>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-danger lead">
                                <div class="row">
                                    <div class="col-sm-4">2007/01-至今</div>
                                    <div class="col-sm-4">单位名称3</div>
                                    <div class="col-sm-4">职位3</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--学习经历end-->
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a href="#collapseThree" data-toggle="collapse" data-parent="#accordion">
                            <h3>项目展示<span class="glyphicon glyphicon-chevron-right pull-right"></span></h3></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--项目展示start---轮播图-->
                <div class="panel-collapse collapse pull-right" id="collapseThree">
                    <div class="panel-body">
                        <div id="divCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#divCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#divCarousel" data-slide-to="1" class="active"></li>
                                <li data-target="#divCarousel" data-slide-to="2" class="active"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{asset('/img/brief-pic/taoci1-1.jpg')}}" alt="陶瓷1" class="img-responsive img-rounded" />
                                    <div class="carousel-caption">图片描述信息</div>
                                </div>
                                <div class="item">
                                    <img src="{{asset('/img/brief-pic/taoci2-2.jpg')}}" alt="陶瓷2" class="img-responsive img-rounded" />
                                    <div class="carousel-caption">图片描述信息</div>
                                </div>
                                <div class="item">
                                    <img src="{{asset('/img/brief-pic/taoci3-3.jpg')}}" class="img-responsive img-rounded" />
                                    <div class="carousel-caption">图片描述信息</div>
                                </div>
                            </div>
                            <a href="#divCarousel" class="left carousel-control" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a href="#divCarousel" class="right carousel-control" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
                <!--项目展示start---轮播图-->
            </div>
        </div>
        <!--主体的版块 end-->
    </div>
    <!--左栏 end-->
    <!--右栏 start-->
    <div class="col-sm-3">
        <div class="panel panel-info">
            <div class="panel-heading">个人信息</div>
            <!--个人信息主体 start-->
            <div class="panel-body">
                <img src="{{asset('/img/brief-pic/pic-model.jpg')}}" class="img-responsive img-rounded img-thumbnail" alt="pic-me" />
                <p class="text-center text-primary">姓名</p>
                <address>
                    <strong>联系我</strong><br /><br />
                    <span class="glyphicon glyphicon-home" style="color:#337AB7;" title="Address"></span><samp>&nbsp;&nbsp;中国香港</samp><br />
                    <span class="glyphicon glyphicon-file" style="color:#337AB7;" title="PostalCode"></span><samp>&nbsp;&nbsp;041000</samp> <br />
                    <span class="glyphicon glyphicon-phone" style="color:#337AB7;" title="Mobile"></span><samp>&nbsp;&nbsp;12325225552</samp><br />
                    <span class="glyphicon glyphicon-envelope" style="color:#337AB7;" title="Email"></span><samp>&nbsp;&nbsp;123@qq.com</samp><br />
                </address>
            </div>
            <!--个人信息主体 end-->
        </div>
        <div class="panel panel-success">
            <div class="panel-heading">所会技能</div>
            <!--所会技能主体 start-->
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-3">
                        <b><span class="text-success">Laravel</span></b>
                    </div>
                    <!--Laravel进度条开始-->
                    <div class="col-sm-9">
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-success" style="width: 82%;"></div>
                        </div>
                    </div>
                    <!--Laravel进度条结束-->
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <b><span class="text-info">PHP</span></b>
                    </div>
                    <!--PHP进度条开始-->
                    <div class="col-sm-9">
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-info" style="width: 90%;"></div>
                        </div>
                    </div>
                    <!--PHP进度条结束-->
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <b><span class="text-warning">MySql</span></b>
                    </div>
                    <!--MySql进度条开始-->
                    <div class="col-sm-9">
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-warning" style="width: 93%;"></div>
                        </div>
                    </div>
                    <!--MySql进度条结束-->
                </div>
            </div>
            <!--所会技能主体 start-->
        </div>
        <!--<div class="panel panel-danger">
            <div class="panel-heading">联系我们</div>
            <div class="panel-body">具体内容</div>
        </div>-->
    </div>
    <!--右栏 start-->
</div>
<footer class="navbar-default navbar-fixed-bottom text-center">版权信息</footer>
</body>
</html>
