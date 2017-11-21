@extends("admin.base")


@section("main")
<div class="panel panel-info">
    <div class="panel-heading ">产品类型编辑</div>
    <div class="panel-body">
        <form action="/admin/productType/{{$product->id}}" method="post">
            <input type="hidden" name="_method" value="put"/>
            <input type="hidden" value="{{$product->id}}" name="id">
            {{csrf_field()}}
            <div class="form-group" style="width:80%;">
                <select class="form-control" name="sort">
                    <option value="0">所属父类</option>
                    @foreach($rs as $v)
                    <option  value="{{$v->id}}"  @if($pid == $v->id)  selected   @endif >{{$v->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group form-inline">
                <label for="name">*名称：</label> <input id="name"  name="name" class="form-control input-default" type="text" value="{{$product->name}}"  >
                <label for="order">*排序：</label> <input id="name"  name="order" class="form-control input-default" type="text" value="{{$product->order}}"  >
            </div>

            <div class="form-group form-inline">
                <label for="price">价格：</label>  <input id="price"  name="price"  class="form-control" type="text" value="{{$product->price}}"  >
                <label for="status">类型状态：</label>  <input id="status"  name="status"  readonly class="form-control" type="text" value="{{$product->status}}"  >
            </div>
            <div class="form-group form-inline">
                <label for="url">类型外链：</label>  <input id="url"  name="url" style="width: 70%;" class="form-control" type="text" value="{{$product->url}}"  >
            </div>

            <div class="form-group form-inline">
                <label for="pic">图片地址：</label>  <input id="pic"  name="pic" style="width: 70%;" class="form-control" type="text" value="{{$product->pic}}"  >
            </div>

            <div class="form-group form-inline">
                <label for="desc">类型描述：</label>
                <textarea class="form-control" name="desc" id="desc" cols="50" rows="10">{{$product->desc}}</textarea>
            </div>

            <input class="btn btn-info" type="submit" value="确定修改">

        </form>

    </div>
</div>
@endsection