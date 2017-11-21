@extends("admin.base")
@section("main")
<div class="panel panel-info">
    <div class="panel-heading ">用户角色添加</div>
    <div class="panel-body">
        <form action="{{route('role.store')}}" method="post" >
            {{csrf_field()}}
            <div class="col-sm-5">
                <input  name="name" class="form-control input-default" type="text" placeholder="请输入角色名称">
            </div>
            <input class="btn btn-info" type="submit" value="确定添加">
        </form>

    </div>
</div>
@endsection
