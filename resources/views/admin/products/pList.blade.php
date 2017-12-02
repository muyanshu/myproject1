@extends("admin.base")
@section("main")

<!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="/admin">首页</a> &raquo; <a href="#">产品管理</a> &raquo; 管理
</div>
<!--面包屑导航 结束-->

<!--结果页快捷搜索框 开始-->
<div class="search_wrap">
    <form action="/admin/product/search" method="post">
        <table class="search_tab">
            <tr>
                <th width="120">选择类型:</th>
                <td>
                    <select  name="class_id">
                        <option value="0">全部</option>
                        @foreach($category as $row)
                        <option value="{{$row->id}}" @if(!empty($class_id)) @if($row->id == $class_id)selected @endif  @endif>{{$row->name}}</option>
                            @if(!empty($children[$row->id]))
                                @foreach($children[$row->id] as $v)
                                    <option value="{{$v->id}}"  @if(!empty($class_id)) @if($v->id == $class_id)selected @endif  @endif>&nbsp;&nbsp;&nbsp;&nbsp;|---- {{$v->name}}</option>
                                @endforeach
                            @endif

                        @endforeach
                    </select>
                </td>
                <th width="70">关键字:</th>

                <td><input type="text" name="keywords" placeholder="关键字" value="@if(!empty($keywords)){{$keywords}}@endif"></td>
                <td><input type="submit"  class="btn btn-primary" name="sub" value="查询"></td>

            </tr>
        </table>
        {{csrf_field()}}
    </form>
</div>
<!--结果页快捷搜索框 结束-->

<!--搜索结果页面 列表 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <!--快捷导航 开始-->
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{route('product.create')}}"><i class="fa fa-plus"></i>新增产品</a>
                <a href="#" id="batchUpdate"><i class="fa fa-refresh"></i>批量更新排序</a>
            </div>
        </div>
        <!--快捷导航 结束-->
    </div>

    <div class="result_wrap">
        <div class="result_content">
            <table class="list_tab">
                <tr>
                    <th class="tc" width="60"><label style="margin-right: 0px;"><input type="checkbox"  > 全选</label></th>
                    <th class="tc">排序</th>
                    <th class="tc">ID</th>
                    <th width="60px">图片</th>
                    <th>标题</th>
                    <th>价格</th>
                    <th>所属课程</th>
                    <th>所属班级</th>
                    <th>更新时间</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                @foreach($rs as $v)
                <tr>
                    <td class="tc"><input type="checkbox" name="id" value="{{$v->id}}"></td>
                    <td class="tc">
                        <input type="text" name="ord" value="{{$v->displayorder}}">
                    </td>
                    <td class="tc">{{$v->id}}</td>
                    <td class="tc"><img src="/{{$v->thumb}}" style="width:50px;height:50px;padding:1px;border:1px solid #ccc;" alt=""></td>
                    <td>
                        <a href="#">{{$v->name}}</a>
                    </td>
                    <td>{{$v->price}}</td>
                    <td>{{App\Http\Model\ProductType::getClassName($v->course_cate)->name}}</td>
                    <td>{{App\Http\Model\ProductType::getClassName($v->class_cate)->name}}</td>
                    <td>{{$v->updated_at}}</td>
                    <td><a href="#" class="upStatus" id="{{$v->id}}status">@if($v->status == "1") 上架  @else 下架  @endif</a></td>

                    <td>
                        <a href="/admin/product/{{$v->id}}/edit">修改</a>
                        <a href="#"  class="delProduct" id="{{$v->id}}btn" >删除</a>
                    </td>
                </tr>
                @endforeach


            </table>


            <div class="page_nav">
                {{$rs->links()}}
            </div>



        </div>
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
<!--搜索结果页面 列表 结束-->
<script>

    var product_id = 0;
    $(".delProduct").click(function () {
        var del_state = confirm('删除后无法恢复，你确定要删除吗？');
        if(del_state){
            product_id = parseInt(this.id);
            $.ajax({
                url:"/admin/product/"+product_id,
                type:"delete",
                data:{'_token': $('input[name=_token]').val()},
                success:function (data) {
                    if(data=="200"){
                        $("#" + product_id + "btn").parent().parent().remove();
                    }
                }
            });


        }
    })


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
                url:"/admin/product/batchUpdate",
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

    $(".upStatus").click(function () {

        product_id = parseInt(this.id);
        $.ajax({
            url:"/admin/product/statusx/"+product_id,
            type:"get",
            dataType:'json',
            data:{'_token': $('input[name=_token]').val()},
            success:function (data) {
                var color_txt = (data == "下架")?"color: red":"";
                $("#" + product_id + "status").html("<span style='"+color_txt+"'>"+data+"</span>");
            }
        });
    })

</script>
@endsection