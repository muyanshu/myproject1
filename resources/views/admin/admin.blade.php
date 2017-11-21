<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <title>后台登录首页</title>

</head>
<body>
@include("admin.header")
<div class="container">
    <div class="row">
        @include("admin.nav")
        <div class="col-sm-9">
            <div>
                欢迎登录后台管理中心。
                如有疑问可以联系管理员~~QQ：3167775699

                具体功能点击左边导航查看~~
            </div>


        </div>
    </div>


</div>
@include("admin.footer")
</body>
</html>
