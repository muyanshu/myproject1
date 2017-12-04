@extends('web.base')
{{--标题--}}
@section('title')
    购物车
@endsection

{{--主体内容--}}
@section('content')

    <div style="width: 80%;margin: 0 auto;">
        <div class="panel panel-info">
            <div class="panel-heading">
                商品列表
            </div>
            <div class="panel-body">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr class="success">
                        <th style="width: 20%" class="text-center">订单号</th>
                        <th style="width: 20%" class="text-center">商品商品名称</th>
                        <th style="width: 10%" class="text-center">市场价</th>
                        <th style="width: 10%" class="text-center">本店价</th>
                        <th style="width: 15%" class="text-center">购买数量</th>
                        <th style="width: 10%" class="text-center">小计</th>
                        <th class="text-center">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($rs as $k=>$v)
                            <tr >
                                <td>{{$v->ordernumber}}</td>
                                <td class="text-right">{{$v->pname}}</td>
                                <td class="text-right">{{$v->sprice}}</td>
                                <td class="text-right" style="color: red;">￥{{$v->price}}</td>
                                <td class="text-right">
                                    <div class="input-group">
                                        <div class="input-group-addon btn " style="width: 35%"><a href="/car/decr/{{$v->id}}">-</a></div>
                                        <input type="text" class="form-control" value="{{$v->num}}" readonly>
                                        <div class="input-group-addon btn " style="width: 35%"><a href="/car/adcr/{{$v->id}}">+</a></div>
                                    </div>
                                </td>
                                <td class="text-right" style="color: red;">￥{{$v->num*$v->price}}</td>
                                <td>
                                    <a href="/car/pay/{{$v->id}}"><input type="button" class="btn btn-sm btn-info" value="购买"></a>
                                    <a href="/car/del/{{$v->id}}"><input type="button" class="btn btn-sm btn-info" value="删除"></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">
                <div class="text-right">
                    购物金额总计<span style="color: red">￥{{$allprice}}</span>，比市场价￥{{$sallprice}}节省￥{{$sallprice-$allprice}}元
                    <a href="/car/allpay"><input type="button" class="btn btn-info" value="全部购买"></a>
                </div>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">
                收货人信息
            </div>
            <div class="panel-body">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr class="success">
                        <th class="text-center">收货人姓名</th>
                        <th class="text-center">联系方式</th>
                        <th class="text-center">收货地址</th>
                        <th class="text-center">邮政编码</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr >
                        <td class="text-center">路人甲</td>
                        <td class="text-center">17396795555</td>
                        <td class="text-center">上海市华漕区...</td>
                        <td class="text-center">324000</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">
                其他信息
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-9">
                        <label for="exampleInputPassword1">订单附言：</label>
                        <textarea name="detail" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
