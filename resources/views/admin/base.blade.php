<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('/js/jquery-1.12.min.js')}}"></script>
    <script src="{{asset('/js/jquery-form.js')}}"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>
    <title>@yield("title","后台管理")</title>
</head>
<body>
@include("admin.header")

<div class="container">
    <div class="row">
        @include("admin.nav")
        <div class="col-md-9">
            <div class="panel panel-info">
            @yield("main")

            </div>
        </div>
    </div>
</div>

@include("admin.footer")

</body>
</html>
