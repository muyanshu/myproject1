<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>学习项目</title>

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/base.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}"/>

    <script src="{{asset('/js/jquery-1.12.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
</head>
<body>
@include('web.head')
<div class="container body_width">
    <div class="carousel slide" style="height: 500px;border: solid 1px #333">
        <div class="page-header">
            <h1>index 999999 老师修改</h1>
        </div>

        <div class="page-header">
            <h1>index2</h1>
        </div>
    </div>
</div>
@include('web.foot')
</body>
</html>
