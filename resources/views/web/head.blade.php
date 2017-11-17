<header>
    <nav class="container navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="/img/web/logo.png" height="30" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">网站首页 <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{route('about')}}">简介</a></li>
                    <li><a href="{{route('list')}}">新闻博客</a></li>
                    <li><a href="{{route('products')}}">商城</a></li>
                    <li><a href="{{route('piclist')}}">图文</a></li>
                    <li><a href="{{route('msg')}}">论坛</a></li>
                    <li><a href="{{route('video')}}">视频教程</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">重难点 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">第三方接口</a></li>
                            <li><a href="#">支付宝支付</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="搜索">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">搜索</button>
                        </span>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('login') }}">登录</a></li>
                    <li><a href="{{ route('register') }}">免费注册</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>