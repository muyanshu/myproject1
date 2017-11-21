@extends("admin.base")


@section("main")
<div class="panel panel-info">
    <div class="panel-heading ">修改订单</div>
    <div class="panel-body">
        <form action="/admin/order/{{$order->id}}" method="post">
            <input type="hidden" name="_method" value="put"/>
            <input type="hidden" value="{{$order->id}}" name="id">
            {{csrf_field()}}

            <div class="form-group">
                <label for="name">订单编名称：</label> {{$order->ordernumber}} <br>
                <label for="order">订购人：</label> {{$order->user_id}} <br>
                <label for="order">订购时间：</label> {{$order->created_at}}
            </div>

            <div class="form-group form-inline">
                <label for="money">订单价格：</label>  <input id="money"  name="money"  class="form-control" type="text" value="{{$order->money}}"  >
                <label for="status">状态：</label>
                <select name="status" id="status" class="form-control">
                    @foreach(config("order.status") as $k => $v)
                    <option value="{{$k}}" @if($order->status == $k) selected @endif>{{$v}}</option>
                    @endforeach

                </select>


            </div>


            <div class="form-group form-inline">
                <label for="desc">备注：</label>
                <input type="text" name="desc" id="desc" class="form-control" style="width: 80%;" value="{{$order->desc}}">

            </div>

            <input class="btn btn-info" type="submit" value="确定修改">

        </form>

    </div>
</div>
@endsection