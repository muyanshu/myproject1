@extends("admin.base")


@section("main")
<div class="panel panel-info">
    <div class="panel-heading ">修改订单</div>
    <div class="panel-body">
        <form action="/admin/orderdetail/{{$orderdetail->id}}" method="post">
            <input type="hidden" name="_method" value="put"/>
            <input type="hidden" value="{{$orderdetail->id}}" name="id">
            {{csrf_field()}}
            <div class="form-group">
                <label for="order">订购人：</label> {{App\User::getNameById($orderdetail->user_id)->name}} <br>
                <label for="order">订购时间：</label> {{$orderdetail->created_at}}
            </div>

            <div class="form-group form-inline">
                <label for="name">产品名称：</label>
                <input type="text" name="name" id="name" class="form-control" style="width: 80%;" value="{{$orderdetail->name}}">

            </div>
            <div class="form-group form-inline">
                <label for="price">产品价格：</label>
                <input type="text" name="price" id="price" class="form-control" style="width: 80%;" value="{{$orderdetail->price}}">

            </div>

            <input class="btn btn-info" type="submit" value="确定修改">

        </form>

    </div>
</div>
@endsection