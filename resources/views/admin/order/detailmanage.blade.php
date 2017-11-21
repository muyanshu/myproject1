@extends("admin.base")


@section("main")
<div class="panel panel-info">
    <div class="panel-heading ">订单管理</div>
    <div class="panel-body">

        <form class="form-group form-inline" action="/admin/order">
            <input type="text" name="search" class="form-control" placeholder="根据订单编号或用户编号">
            <button type="submit" class="btn btn-primary">GO</button>
        </form>

        <ul class="list-group">
            <li class="list-group-item">
                <div class="row">
                    <div class="col-xs-1" style=" padding:0px 10px;">
                        <input id="selectAll" type="checkbox" value="all"  > 全选
                    </div>

                    <div class="col-xs-2">订单编号</div>
                    <div class="col-xs-2">订购人</div>
                    <div class="col-xs-2">商品名称</div>
                    <div class="col-xs-2">价格</div>


                </div>


            </li>
            @foreach($orderdetail as $v)
            <li class="list-group-item parent">
                <div class="row">
                    <div class="col-xs-1" style="padding: 0px 10px;">
                        <input name="id" class="selid" type="checkbox" value="{{$v->id}}"  >
                    </div>

                    <div class="col-xs-2">
                        <a href="/admin/order?id={{$v->order_id}}">{{$v->order_id}}</a>
                    </div>
                    <div class="col-xs-2">
                        <a href="/admin/user/{{$v->user_id}}/edit">{{App\User::getNameById($v->user_id)->name}}</a>
                    </div>
                    <div class="col-xs-2">
                        <a href="##">{{$v->name}}</a>
                    </div>
                    <div class="col-xs-2">
                        {{$v->price}}元
                    </div>

                    <div class="col-sm-2">
                        <!-- Single button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                操作 <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">

                                <li><a href="/admin/orderdetail/{{$v->id}}/edit">修改订单</a></li>

                                <li><a href="#">订购时间：{{$v->created_at}}</a></li>

                                <li><a href="###">备注：{{$v->desc}}</a></li>
                                <li><a class="delEvent" href="#" data-toggle="modal" id="{{$v->id}}btn"
                                       data-target="#myDelModal">删除</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            @endforeach
        </ul>
        <input id="changeOrder" class="btn btn-warning" type="button" value="批量备用功能">
        <div class="page">
            {{$orderdetail->links()}}
        </div>
    </div>

    <div class="panel-footer">


    </div>
</div>
@endsection

@section("jsbottom")


<div id="myDelModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">警告</h4>
            </div>
            <div class="modal-body">
                <p>删除后将无法恢复，你确定删除吗？不确定请点击取消或关闭即可。</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button id="delbtn" type="button" class="btn btn-primary">确定删除</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<input type="hidden" name="_token" value="{{csrf_token()}}">
<script>
    $id = 0;
    $(".delEvent").click(function () {
        $id = parseInt(this.id);
    })
    $('#myDelModal').on('hidden.bs.modal', function (e) {
        //alert("关闭成功");

    })

    //删除
    $("#delbtn").click(function () {
        $.ajax({
            url: '/admin/order/'+$id,
            type: "delete",
            data: {'_token': $('input[name=_token]').val()},
            success: function (data) {
                //直接移除
                $("#" + $id + "btn").parents(".list-group-item.parent").remove();
                //隐藏
                $('#myDelModal').modal("hide");
                if(data=="200"){
                    //alert("删除成功");
                }

            }
        });

    })

    //批量修改相关
    $("#selectAll").change(function(){
        var flag = $(this).prop("checked");
        $('input[name="id"]').each(function(){
            $(this).prop("checked",flag);
        })
    });

    //批量修改
    //批量获取被选中的ID， 批量获取ID对应的数量。
    //发给后台，进行修改~~
    $("#changeOrder").click(function(){
        var $ids = [];
        $('input[name="id"]').each(function(){
            if($(this).prop("checked")){
                var id = parseInt($(this).val());
                $ids[id] = parseInt($(this).parents(".list-group-item.parent").find("input[name='order']").val());
            }
        })

        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
        });

        if(!($ids.length)){
            alert("备用功能代码，后期可拓展或上线清理!");
            return false;
        }
        $.ajax({
            url:"/admin/order/batchUpdate",
            method:"post",
            data:{"ids":$ids},
            success:function (data) {
                if(data == "200"){
                    alert("排序更新成功");
                    location.reload(true);
                }else{
                    alert("排序更新失败");
                }
            },
            error:function (data) {
                //console.log(data);
            }
        })

    })
</script>
@endsection