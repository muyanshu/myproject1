@extends("admin.base")


@section("main")

<div class="panel panel-info">
    <div class="panel-heading ">产品类型管理</div>
    <div class="panel-body">
        <form action="{{route('productType.store')}}" method="post" >
            <div class="col-md-3">
                <select class="form-control" name="sort">
                    <option value="0">所属父类</option>
                    @foreach($rs as $v)
                    <option  value="{{$v->id}}"  @if($id == $v->id)  selected   @endif >{{$v->name}}</option>
                    @endforeach
                </select>
            </div>
            {{csrf_field()}}
            <div class="col-md-3">
                <input  name="name" class="form-control input-default" type="text" placeholder="请输入产品类型名称">
            </div>
            <input class="btn btn-info" type="submit" value="确定添加">
        </form>

    </div>
</div>

@endsection