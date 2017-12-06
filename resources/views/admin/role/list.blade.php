@extends("admin.base")
@section("main")

    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="http://myproject1.com/admin">首页</a> &raquo; <a href="/admin/role">用户组管理</a> &raquo; 管理
    </div>
    <!--面包屑导航 结束-->

    {{--<!--结果页快捷搜索框 开始-->--}}
    {{--<div class="search_wrap">--}}
        {{--<form action="/admin/role" method="post">--}}
            {{--<input type="hidden" name="_method" value="get"/>--}}
            {{--{{csrf_field()}}--}}
            {{--<table class="search_tab">--}}
                {{--<tr>--}}
                    {{--<th width="120">选择类型:</th>--}}
                    {{--<td>--}}
                            {{--<select  name="sname">--}}
                                {{--<option  value="">全部</option>--}}
                                {{--<option value="name">名称</option>--}}
                                {{--<option value="id">ID</option>--}}
                            {{--</select>--}}
                    {{--</td>--}}
                    {{--<th width="70">关键字:</th>--}}
                    {{--<td><input type="text" name="search" placeholder="关键字" value="{{$search1}}"></td>--}}
                    {{--<td><input type="submit" class="btn btn-primary" name="sub" value="查询"></td>--}}
                {{--</tr>--}}
            {{--</table>--}}
        {{--</form>--}}
    {{--</div>--}}
    {{--<!--结果页快捷搜索框 结束-->--}}

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="result_wrap">
            <div class="result_title">
                <h3>快捷操作</h3>
            </div>
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="/admin/role/create"><i class="fa fa-plus"></i>新增用户组</a>
                    <a href="#" id="deleterole"><i class="fa fa-recycle"></i>批量删除</a>
                    <a href="#"  id="batchUpdate"><i class="fa fa-refresh"></i>更新排序</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <th class="tc" width="5%"><input type="checkbox" id="selectAll" name=""></th>
                        <th class="tc">排序</th>
                        <th class="tc">ID</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>用户数</th>
                        <th>更新时间</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    <tr>
                        {{--循环显示内容--}}
                        @foreach($rs as $v)
                        <td class="tc"><input type="checkbox" name="id" value="{{$v->id}}"></td>
                        <td class="tc">
                            <input type="text" name="ord" value="{{$v->roleorder}}">
                        </td>
                        <td class="tc">{{$v->id}}</td>
                        <td>
                            <a href="#">{{$v->name}}</a>
                        </td>
                        <td>{{$v->description}}</td>
                        <td>1852</td>
                        <td>{{$v->updated_at}}</td>
                        <td>
                            @if($v->status == "1")
                                <span style="color:limegreen">开启</span>
                                @else
                                <span style="color:red">关闭</span>
                            @endif
                        </td>
                        <td>
                            <a href="/admin/role/{{$v->id}}/edit">修改</a>
                            <a href="#" class="delEvent" href="#"   id="{{$v->id}}btn" onclick="del('role-{{$v->id}}')">删除</a>
                        </td>
                    </tr>
                    @endforeach
                    {{--结束循环--}}
                </table>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
<script>
    //全选功能
    $("#selectAll").change(function(){
        var flag = $(this).prop("checked");
        $('input[name="id"]').each(function(){
            $(this).prop("checked",flag);
        })
    });

    //批量删除功能
    $("#deleterole").click(function(){
        if(confirm('删除后无法恢复，你确定要删除所中的用户组吗？')) {
            var id = $("input[name='id']");
            length = id.length;
            var str = "";
            for (var i = 0; i < length; i++) {
                if (id[i].checked == true) {
                    str = str + "," + id[i].value;
                }
            }
            $str = str.substr(1); //存入数组中

            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'}
            });

            $.ajax({  //ajax传递参数
                url: '/admin/role/deleteAll',
                type: "post",
                data: {'str': $str},
                success: function (data) {
                    //alert(data);
                    if (data == "ture") {
                        alert("删除用户成功 ");
                    } else {
                        alert("删除用户失败，请查看是否有勾选！");
                    }
                }
            });
            window.location.reload();
        }
    });

    //更新排序
    $("#batchUpdate").click(function () {
        var ids = [];
        $('input[name="id"]').each(function(){
            if($(this).prop("checked")){
                var id = parseInt($(this).val());
                ids[id] = $(this).parent().siblings().find("input[name='ord']").val();
            }
        });
        //alert(ids);
        if(ids.length>0){
            //console.log(ids);
            $.ajax({
                url:"/admin/role/batchUpdate",
                method:"post",
                data:{'_token': $('input[name=_token]').val(),"ids":ids},
                success:function (data) {
                    //alert(data);
                    if(data=="200"){
                        alert("排序更新成功");
                    }else{
                        alert("排序更新失败");
                    }
                }
            });
            window.location.reload();
        }else{
            alert('请点击全选');
        }
    });
</script>
@endsection