@extends("admin.base")
@section("main")

<!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="/admin">首页</a> &raquo; <a href="#">产品类型管理</a> &raquo; 管理
</div>
<!--面包屑导航 结束-->

<!--结果页快捷搜索框 开始-->
<!--<div class="search_wrap">
    <form action="" method="post">
        <table class="search_tab">
            <tr>
                <th width="120">选择类型:</th>
                <td>
                    <select onchange="javascript:location.href=this.value;">
                        <option value="">全部</option>
                        <option value="http://www.baidu.com">百度</option>
                        <option value="http://www.sina.com">新浪</option>
                    </select>
                </td>
                <th width="70">关键字:</th>
                <td><input type="text" name="keywords" placeholder="关键字"></td>
                <td><input type="submit" class="btn btn-primary" name="sub" value="查询"></td>
            </tr>
        </table>
    </form>
</div>-->
<!--结果页快捷搜索框 结束-->

<!--搜索结果页面 列表 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <!--快捷导航 开始-->
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{route('productType.create')}}"><i class="fa fa-plus"></i>新增类型</a>
                <a href="#" id="batchUpdate"><i class="fa fa-refresh"></i>批量更新排序</a>
            </div>
        </div>
        <!--快捷导航 结束-->
    </div>

    <div class="result_wrap">
        <div class="result_content">
            <table class="list_tab">
                <tr>
                    <th class="tc" width="60"><label style="margin-right: 0px;"><input type="checkbox" id="selectAll" > 全选</label></th>
                    <th class="tc">排序</th>
                    <th>名称</th>
                    <th>操作</th>
                </tr>
                @foreach($category as $row)
                <tr>
                    <td class="tc"><input type="checkbox" name="id" value="{{$row->id}}"></td>
                    <td class="tc">
                        <input type="text" name="ord" value="{{$row->displayorder}}">
                    </td>
                    <td style="font-weight: bold">
                        {{$row->name}}
                    </td>
                    <td>
                        <a href="/admin/productType/{{$row->id}}/edit">修改</a>
                        <a href="#" class="delClass" id="{{$row->id}}btn"  >删除</a>
                    </td>
                </tr>

                    @if(!empty($children[$row->id]))
                        @foreach($children[$row->id] as $v)
                        <tr>
                        <td class="tc"><input type="checkbox" name="id" value="{{$v->id}}"></td>
                        <td class="tc">
                            <input type="text" name="ord" value="{{$v->displayorder}}">
                        </td>
                        <td style="padding-left: 30px">
                            |---- {{$v->name}}
                        </td>
                        <td>
                            <a href="/admin/productType/{{$v->id}}/edit">修改</a>
                            <a href="#"  class="delClass" id="{{$v->id}}btn" >删除</a>
                        </td>
                    </tr>
                        @endforeach
                    @endif
                @endforeach
            </table>


        </div>
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
<!--搜索结果页面 列表 结束-->
<script>
    var class_id = 0;
    $(".delClass").click(function () {
        var del_state = confirm('删除后无法恢复，你确定要删除吗？');
        if(del_state){
            class_id = parseInt(this.id);
            $.ajax({
                url:"/admin/productType/"+class_id,
                type:"delete",
                data:{'_token': $('input[name=_token]').val()},
                success:function (data) {
                    if(data=="200"){
                        $("#" + class_id + "btn").parent().parent().remove();
                    }else{

                        if(data=="501" || data=="502"){
                            alert("此栏目下有子栏目或内容不能删除");
                        }
                    }
                }
            });


        }
    })


    //批量修改相关
    $("#selectAll").change(function(){
        var flag = $(this).prop("checked");
        $('input[name="id"]').each(function(){
            $(this).prop("checked",flag);
        })
    });

    $("#batchUpdate").click(function () {
        var ids = [];
        $('input[name="id"]').each(function(){
            if($(this).prop("checked")){
                var id = parseInt($(this).val());
                ids[id] = $(this).parent().siblings().find("input[name='ord']").val();
            }
        });
        if(ids.length>0){
            //console.log(ids);
            $.ajax({
                url:"/admin/productType/batchUpdate",
                method:"post",
                data:{'_token': $('input[name=_token]').val(),"ids":ids},
                success:function (data) {
                    if(data=="200"){
                        alert("排序更新成功");
                    }else{

                        alert("排序更新失败");
                    }
                }
            });


        }else{
            alert('请点击全选');
        }
    })

</script>
@endsection