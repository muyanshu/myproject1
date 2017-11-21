@extends("admin.base")


@section("main")
<div class="panel panel-info">
    <div class="panel-heading ">权限添加</div>
    <div class="panel-body">
        <form action="{{route('permission.store')}}" method="post" >

            {{csrf_field()}}
            <div class="col-xs-3">
                <div class="panel panel-danger">
                    <div class="panel-heading ">所属角色</div>
                    <div class="panel-body">
                        @foreach($role as $v)
                        {{$v->id}}
                        <input id="role{{$v->id}}" type="checkbox" name="roles[]" value="{{$v->id}}">
                        <label for="role{{$v->id}}">{{$v->name}}</label>
                        <br>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-xs-9">
                <div class="form-group form-inline">
                    <label for="name">*权限描述：</label>
                    <input  name="name" class="form-control input-default" type="text" placeholder="请输入权限描述名称">

                </div>


                <div class="form-group">
                    <select class="form-control" name="resource_id">
                        <option value="-1">所有资源类型</option>
                        <?php
                        echo App\ProductType::getSortOption();
                        ?>
                    </select>
                </div>

                <input class="btn btn-info" type="submit" value="确定添加">
            </div>
        </form>

    </div>
</div>
@endsection