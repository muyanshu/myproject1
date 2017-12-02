@extends("admin.base")
@section("main")

        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="/admin">首页</a> &raquo; <a href="/admin/order">订单管理</a> &raquo; 订单编辑
</div>
<!--面包屑导航 结束-->

<div class="result_wrap">
    <form action="/admin/orderupdate" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$order->id}}">
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="80"><i class="require">*</i>订单编号名称：</th>
                <td>
                    {{$order->ordernumber}}
                </td>
            </tr>
            <tr>
                <th width="80"><i class="require">*</i>商品名称：</th>
                <td>
                    {{$order->product_name}}
                </td>
            </tr>
            <tr>
                <th width="80"><i class="require">*</i>订购人：</th>
                <td>
                   {{$order->username}}
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>订购时间：</th>
                <td>
                    <p>{{$order->created_at}}</p>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>订单价格：</th>
                <td>
                    <input type="text" class="sm" name="price" value="{{$order->price}}">元
                </td>
            </tr>
            <tr>
                <th></i>状态：</th>
                <td>
                    <select name="status">
                        <option value="1">所有类型</option>
                        @if($order->status==1)
                        <option selected value="1">待付款</option>
                        <option value="0">已付款</option>
                        @else($order->status==0)
                        <option value="1">待付款</option>
                        <option selected value="0">已付款</option>
                        @endif
                    </select>
                </td>
            </tr>
            <tr>
                <th>备注：</th>
                <td>
                    <textarea name="remark">{{$order->remark}}</textarea>
                </td>
            </tr>
            </tbody>
        </table>
        <div style="margin-left: 150px;margin-top: 20px;"><input type="submit" value="提交">
        <input type="button" class="back" onclick="history.go(-1)" value="返回"></div>
    </form>
</div>


@endsection