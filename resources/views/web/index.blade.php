@extends('web.base')
{{--标题--}}
@section('title')
    首页
@endsection

{{--主体内容--}}
@section('content')
<div class="container body_width">
    <div class="carousel slide" >
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/img/web/111.jpg" width="1140" alt="">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="/img/web/112.jpg" width="1140" alt="">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="/img/web/113.jpg" width="1140" alt="">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="/img/web/114.jpg" width="1140" alt="">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <div class="page-header">
            <h2>智能慧教育公司简介</h2>
        </div>

        <div class="well">
            网址：(www.zgzxedu.com)记忆方法：中国在线教育点com。中国在线教育先行者与标准制定参与者！主管单位：安徽智能慧教育咨询有限公司。
        </div>

        <div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content" style="border: 1px solid #eee; border-top: none;">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <img src="/img/web/100w.png" alt="">
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <img src="/img/web/chengxin.png" alt="">
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                    <img src="/img/web/result.png" alt="">
                </div>
                <div role="tabpanel" class="tab-pane" id="settings">
                    <img src="/img/web/standard.png" alt="">
                </div>
            </div>


        <div class="page-header">
            <h2>全国统一透明学费 - 明明白白消费</h2>
        </div>

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            按键1
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;按键1-内容;
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            按键2
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;按键2-内容;
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            按键3;
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;按键3-内容;
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header">
            <h2>基础部分免费试听课程</h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="/img/web/vuejs.png" alt="">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="/img/web/expo.png" alt="">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="/img/web/webpack.png" alt="">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="/img/web/jqueryapi.png" alt="">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header">
            <h2>学员故事墙</h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4"><img src="/img/web/s1.jpg" width="89"></div>
                            <div class="col-xs-8">
                                工作地点：北京 <br>
                                薪资：目前薪资16K<br>
                                学前工作：SEO专员，月薪5K左右。<br>
                                班级：后台初中级课程
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4"><img src="/img/web/s1.jpg" width="89"></div>
                            <div class="col-xs-8">
                                工作地点：北京 <br>
                                薪资：目前薪资16K<br>
                                学前工作：SEO专员，月薪5K左右。<br>
                                班级：后台初中级课程
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4"><img src="/img/web/s1.jpg" width="89"></div>
                            <div class="col-xs-8">
                                工作地点：北京 <br>
                                薪资：目前薪资16K<br>
                                学前工作：SEO专员，月薪5K左右。<br>
                                班级：后台初中级课程
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4"><img src="/img/web/s1.jpg" width="89"></div>
                            <div class="col-xs-8">
                                工作地点：北京 <br>
                                薪资：目前薪资16K<br>
                                学前工作：SEO专员，月薪5K左右。<br>
                                班级：后台初中级课程
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4"><img src="/img/web/s1.jpg" width="89"></div>
                            <div class="col-xs-8">
                                工作地点：北京 <br>
                                薪资：目前薪资16K<br>
                                学前工作：SEO专员，月薪5K左右。<br>
                                班级：后台初中级课程
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel title</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4"><img src="/img/web/s1.jpg" width="89"></div>
                            <div class="col-xs-8">
                                工作地点：北京 <br>
                                薪资：目前薪资16K<br>
                                学前工作：SEO专员，月薪5K左右。<br>
                                班级：后台初中级课程
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header">
            <h2>报名方式</h2>
        </div>
        <div class="alert alert-success" role="alert">如果有班主任请在您的班主任处报名有优惠！如果没有班主任请联系 QQ： 3167775616 、 微信及手机： 18955113220， ！</div>


        <div class="page-header">
            <h2>紧跟世界的步伐</h2>
        </div>
        <div class="alert alert-success" role="alert">前沿与主流： 所有课程每年都会更新， 为未来紧跟世界技术的前沿，为当下把握本地容易就业的主流技术！</div>
        <div class="alert alert-info" role="alert">前沿与主流： 所有课程每年都会更新， 为未来紧跟世界技术的前沿，为当下把握本地容易就业的主流技术！</div>

    </div>
</div>
@endsection
