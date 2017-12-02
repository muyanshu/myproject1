@extends("admin.base")
@section("main")
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="/admin">首页</a> &raquo; <a href="#">产品类型管理</a> &raquo; 添加产品类型
</div>
<!--面包屑导航 结束-->
<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>快捷操作</h3>
    </div>
    <div class="result_content">
{{--        <div class="short_wrap">
            <a href="#"><i class="fa fa-plus"></i>新增类型</a>
            <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
            <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
        </div>--}}
    </div>
</div>
<!--结果集标题与导航组件 结束-->
<div class="result_wrap">
    <form action="{{route('productType.store')}}" method="post">
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>分类：</th>
                <td>
                    <select name="parentid">
                        <option value="0">一级分类</option>
                        @foreach($rs as $v)
                        <option value="{{$v->id}}">{{$v->name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>产品类型：</th>
                <td>
                    <input type="text" class="lg" name="name" placeholder="请输入产品类型名称" style="width: 300px"><span style="color: red" id="message">@if(!empty($img))*{{$img}}@endif</span>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    {{csrf_field()}}
                    <input type="submit" class="btn btn-primary" value="提交">
                    <input type="button" class="back" onclick="history.go(-1)" value="返回">

                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
<script>
    $('input[type="submit"]').click(function () {
        if($('input[name="name"]').val()==""){
            $("#message").html("*产品类型不能为空!");
            return false;
        }
    });
</script>
@endsection