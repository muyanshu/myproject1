@extends("admin.base")


@section("main")
<div class="panel panel-info">
    <div class="panel-heading ">用户组(role)管理</div>
    <div class="panel-body">

        <ul class="list-group">
            <li class="list-group-item">
                <div class="row">
                    <div class="col-xs-3" style="padding-left: 25px;">名称(id)</div>
                    <div class="col-xs-6" style="padding-left: 25px;">描述</div>
                    <div class="col-xs-2" style="padding-left: 25px;">用户数</div>
                </div>
            </li>
            @foreach($rs as $v)

            <li class="list-group-item parent">
                <div class="row">
                    <div class="col-xs-3" style="padding-left: 25px;">
                        <a href="##">{{$v->name}} ({{$v->id}})</a>
                    </div>
                    <div class="col-xs-6" style="padding-left: 25px;">
                        <a href="##">{{$v->description}}  </a>
                    </div>

                    <div class="col-xs-3">
                        (1688人)
                        <!-- Single button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                操作 <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">

                                <li><a href="/admin/role/{{$v->id}}/edit">修改</a></li>
                                <li><a href="#">查看用户</a></li>
                                <li><a class="delEvent" href="#" data-toggle="modal" id="{{$v->id}}btn"
                                       data-target="#myDelModal">删除</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            @endforeach
        </ul>

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
            url: '/admin/role/'+$id,
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