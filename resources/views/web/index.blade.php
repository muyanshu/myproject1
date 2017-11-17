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
<div class="container" style="height: 800px;border: solid 1px #333">index</div>
@include('web.foot')
</body>
</html>
