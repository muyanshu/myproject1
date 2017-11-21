@extends("admin.base")


@section("main")
<div class="panel panel-info">
    <div class="panel-heading ">产品管理</div>
    <div class="panel-body">

        <ul class="list-group">
            <li class="list-group-item">
                <div class="row">
                    <div class="col-xs-1" style=" padding:0px 10px;">
                        <input id="selectAll" type="checkbox" value="all"  > 全选
                    </div>
                    <div class="col-xs-1">排序</div>
                    <div class="col-xs-2">价格</div>
                    <div class="col-xs-3">班型</div>
                    <div class="col-xs-3">名称</div>

                </div>
            </li>
            @foreach($rs as $v)
            <li class="list-group-item parent">
                <div class="row">
                    <div class="col-sm-1">
                        <input name="id" type="checkbox" value="{{$v->id}}">
                    </div>
                    <div class="col-sm-1">
                        <input  name="order[]" class="form-control input-sm orderJS" type="text" value="{{$v->order}}">
                    </div>
                    <div class="col-sm-2">
                        <input name="price[]" class="form-control input-sm priceJS" type="text" value="{{$v->price}}">
                    </div>
                    <div class="col-md-3">


                        <a> {{App\ProductType::getSortNameById($v->class_id)->name}}</a>

                    </div>
                    <div class="col-md-3">

                        <a>{{$v->name}}</a>

                    </div>
                    <div class="col-sm-2">
                        <!-- Single button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                操作 <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="/admin/product/create?sort={{$v->id}}">添加同类</a></li>
                                <li><a href="/admin/product/{{$v->id}}/edit">修改</a></li>
                                <li><a href="/admin/product/statusx/{{$v->id}}">当前状态：@if($v->status == "1") 上架中  @else 下架中  @endif</a></li>
                                <li><a class="delEvent" href="#" data-toggle="modal" id="{{$v->id}}btn"
                                       data-target="#myDelModal">删除</a></li>

                            </ul>
                        </div>
                    </div>

                </div>


            </li>
            @endforeach
        </ul>
        <div class="page">
            {{$rs->links()}}
        </div>

    </div>
    <div class="panel-footer">

        <input id="changeOrder" type="button" value="批量修改排序">
        <input id="changePrice" type="button" value="批量修改价格">
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
//全选与反选
    $("#selectAll").change(function(){
        var flag = $(this).prop("checked");
        $('input[name="id"]').each(function(){
                $(this).prop("checked",flag);
        })
    });


//批量修改
//批量获取被选中的ID， 批量获取ID对应的数量。
//发给后台，进行修改~~
    $("#changeOrder,#changePrice").click(function(){
        var  findJS = ".orderJS";
        var field = "order";
        $id = this.id;
        if(this.id == "changePrice"){
            findJS = ".priceJS";
            field = "price";
        }
        var $ids = [];
        $('input[name="id"]').each(function(){
           if($(this).prop("checked")){
               var id = parseInt($(this).val());
               $ids[id] = parseInt($(this).parents(".list-group-item.parent").find(findJS).val());
           }
        })

        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }
        });
        $.post("/admin/product/batchUpdate",{"ids":$ids, "field":field},function (data) {
            if(data == "200"){
                alert("排序更新成功");
                location.reload(true);
            }else{
                alert("排序更新失败");
            }
        })

    })

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
            url: '/admin/product/'+$id,
            type: "delete",
            data: {'_token': $('input[name=_token]').val()},
            success: function (data) {
                //直接移除，正取做法
                $("#" + $id + "btn").parents(".list-group-item.parent").remove();
                //隐藏
                $('#myDelModal').modal("hide");
                if(data=="200"){
                    //alert("删除成功");
                }

            }
        });

    })

</script>
@endsection