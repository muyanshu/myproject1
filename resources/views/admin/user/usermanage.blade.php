@extends("admin.base")
@section("main")

<!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="http://myproject1.com/admin">首页</a> &raquo; <a href="/admin/user">用户管理</a> &raquo; 管理
</div>
<!--面包屑导航 结束-->

<!--结果页快捷搜索框 开始-->
<div class="search_wrap">
    <form action="" method="post">
        <table class="search_tab">
            <tr>
                <th width="120">选择类型:</th>
                <td>
                    <select ">
                        <option value="">全部</option>
                        <option value="http://www.baidu.com">百度</option>
                        <option value="http://www.sina.com">新浪</option>
                    </select>
                </td>
                <th width="70">关键字:</th>
                <td><input type="text"  name="keywords" placeholder="关键字"></td>
                <td><input type="submit" class="btn btn-primary" name="sub" value="查询"></td>
            </tr>
        </table>
    </form>
</div>
<!--结果页快捷搜索框 结束-->

<!--搜索结果页面 列表 开始-->
<form action="#" >
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <!--快捷导航 开始-->
        <div class="result_content">
            <div class="short_wrap">
                <a href="/admin/user/create"><i class="fa fa-plus"></i>新增用户</a>
                <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
        <!--快捷导航 结束-->
    </div>

    <div class="result_wrap">
        <div class="result_content">
            <table class="list_tab">
                <tr>
                    <th class="tc" width="5%"><input type="checkbox" name=""></th>
                    <th class="tc">排序</th>
                    <th class="tc">ID</th>
                    <th>用户名</th>
                    <th>头像缩略图</th>
                    <th>手机</th>
                    <th>QQ</th>
                    <th>邮箱</th>
                    <th>操作</th>
                </tr>
                {{--循环显示内容--}}
                @foreach($rs as $v)
                <tr>
                    <td class="tc"><input type="checkbox" name="id[]" value="{{$v->id}}"></td>
                    <td class="tc">
                        <input type="text" name="ord[]" value="1">
                    </td>
                    <td class="tc">{{$v->id}}</td>
                    <td><a href="#">{{$v->name}}</a></td>
                    <td>
                        @if($v->photo != '')
                            <img src="{{url("/storage/uploads")}}/{{$v->photo}}"  hight="50px" width="50px" >
                        @else
                            暂无头像
                        @endif
                    </td>
                    <td>{{$v->tel}}</td>
                    <td>{{$v->qq}}</td>
                    <td>{{$v->email}}</td>
                    <td>
                        <a href="/admin/user/{{$v->id}}/edit">修改</a>
                        <a class="delEvent" href="#"   id="{{$v->id}}btn">删除</a>
                    </td>
                </tr>
                @endforeach
            </table>
            {{--结束循环--}}
            <div class="page">
                    {{$rs->links()}}
            </div>
        </div>
    </div>
    <!--搜索结果页面 列表 结束-->
</form>

<script>
    $id = 0;
    $(".delEvent").click(function () {
        $id = parseInt(this.id);
        if(confirm('删除后无法恢复，你确定要删除吗？')){
            $.ajax({
                url: '/admin/user/'+$id,
                type: "delete",
                data: {'_token': $('input[name=_token]').val()},
                success: function (data) {
                    //alert(data);
                    if(data=="ture"){
                        alert("删除用户成功 ");
                    }else{
                        alert("删除用户失败");
                    }

                }
            });
            window.location.reload();
        }
    })

</script>

@endsection