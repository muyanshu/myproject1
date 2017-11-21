@extends("admin.base")
@section("main")
<div class="panel panel-info">
    <div class="panel-heading ">角色编辑</div>
    <div class="panel-body">
        <form action="/admin/role/{{$role->id}}" method="post">
            <input type="hidden" name="_method" value="put"/>
            <input type="hidden" value="{{$role->id}}" name="id">
            {{csrf_field()}}
            <div class="form-group" style="width:80%;">

            </div>
            <div class="form-group form-inline">
                <label for="name">*角色名称：</label> <input id="name"  name="name" class="form-control input-default" type="text" value="{{$role->name}}"  >
                <label for="order">排序：</label> <input id="order"  name="order" class="form-control input-default" type="text" value="1"  >
            </div>


            <div class="form-group form-inline">
                <label for="desc">角色描述：</label>  <input id="desc"  name="description" style="width: 70%;" class="form-control" type="text" value="{{$role->description}}"  >
            </div>


            <input class="btn btn-info" type="submit" value="确定修改">

        </form>

    </div>
</div>
@endsection