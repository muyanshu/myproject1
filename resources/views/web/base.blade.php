<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/base.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}"/>
    <link rel="stylesheet" href="{{asset('/css/star-rating.css')}}">
    <script src="{{asset('/js/jquery-1.12.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/star-rating.js')}}"></script>
    <!--  [if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
{{--头部--}}
@include('web.head')
<div class="container body_width">
       {{--继承主体内容--}}
        @yield('content')

</div>
{{--尾部--}}
@include('web.foot')
</body>
</html>
