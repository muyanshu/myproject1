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
    <form action="/admin/user" method="post">
        <input type="hidden" name="_method" value="get"/>
        {{csrf_field()}}
        <table class="search_tab">
            <tr>
                <th width="120" >选择类型:</th>
                <td>
                    <select  name="sname">
                        <option  value="">全部</option>
                        <option value="name">用户名</option>
                        <option value="id">ID</option>
                        <option value="email">邮箱</option>
                        <option value="tel">电话号码</option>
                    </select>
                </td>
                <th width="70">关键字:</th>
                <td><input type="text"  name="search" placeholder="关键字" value="{{$search1}}"></td>
                <td><input type="submit" class="btn btn-primary" name="sub" id="sub" value="查询"></td>
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
                <a href="#" id="deleteuser"><i class="fa fa-recycle"></i>批量删除</a>
                <a href="#"   id="batchUpdate" ><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
        <!--快捷导航 结束-->
    </div>

    <div class="result_wrap">
        <div class="result_content">
            <table class="list_tab">
                <tr>
                    <th class="tc" width="5%"><input type="checkbox"  id="selectAll" name="" value="all"></th>
                    <th class="tc">排序</th>
                    <th class="tc">ID</th>
                    <th>用户名</th>
                    <th>头像缩略图</th>
                    <th>电话号码</th>
                    <th>QQ</th>
                    <th>邮箱</th>
                    <th>操作</th>
                </tr>
                {{--循环显示内容--}}
                @foreach($rs as $v)
                <tr>
                    <td class="tc">
                        <input type="checkbox" name="id" value="{{$v->id}}"></td>
                    <td class="tc">
                        <input type="text" name="ord" value="{{$v->userorder}}">
                    </td>
                    <td class="tc">{{$v->id}}</td>
                    <td><a href="#">{{$v->name}}</a></td>
                    <td>
                        @if($v->photo != '')
                            <img src="{{url("/storage/uploads/$v->photo")}}"  hight="50px" width="50px" >
                        @else
                            暂无头像
                        @endif
                    </td>
                    <td>{{$v->tel}}</td>
                    <td>{{$v->qq}}</td>
                    <td>{{$v->email}}</td>
                    <td>
                        <a href="/admin/user/{{$v->id}}/edit">修改</a>
                        <a class="delEvent" href="#"    value="{{$v->id}}"  onclick="del('user-{{$v->id}}')">删除</a>
                    </td>
                </tr>
                @endforeach
            </table>
            {{--结束循环--}}
            {{--分页开始--}}
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="/admin/user?{{$search}}page=1" aria-label="Previous">
                            <span aria-hidden="true">首页</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/user?{{$search}}page={{$curr-1}}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    @foreach($page as $k=>$v)
                        @if($k==$curr)
                            <li class="active"><a href="/admin/user?{{$search}}{{$v}}">{{$k}}</a></li>
                        @else
                            <li><a href="/admin/user?{{$search}}{{$v}}">{{$k}}</a></li>
                        @endif
                    @endforeach
                    <li>
                        <a href="/admin/user?{{$search}}page={{$curr+1}}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/user?{{$search}}page={{$max}}" aria-label="Previous">
                            <span aria-hidden="true">尾页</span>
                        </a>
                    </li>
                    <li>
                        <span aria-hidden="true">总计{{$max}}页</span>
                    </li>

                </ul>
            </nav>
            {{--<div class="page">--}}
                    {{--{{$rs->links()}}--}}
            {{--</div>--}}

        </div>
    </div>
    <!--搜索结果页面 列表 结束-->
</form>
<script >
    //全选功能
    $("#selectAll").change(function(){
        var flag = $(this).prop("checked");
        $('input[name="id"]').each(function(){
            $(this).prop("checked",flag);
        })
    });

    //批量删除功能
    $("#deleteuser").click(function(){
        if(confirm('删除后无法恢复，你确定要删除所中的用户吗？')) {
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
                url: '/admin/user/deleteAll',
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
       // alert(ids);
        if(ids.length>0){
            //console.log(ids);
            $.ajax({
                url:"/admin/user/batchUpdate",
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





