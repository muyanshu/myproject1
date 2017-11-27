@extends("admin.base")
@section("main")

        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">订单管理</a> &raquo; 订单编辑
</div>
<!--面包屑导航 结束-->

<div class="result_wrap">
    <form action="#" method="post">
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>订单编号名称：</th>
                <td>
                    2344512641
                </td>
            </tr>
            <tr>
                <th width="120"><i class="require">*</i>订购人：</th>
                <td>
                   5
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>订购时间：</th>
                <td>
                    <p>2017-11-22 20:46:03</p>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>订单价格：</th>
                <td>
                    <input type="text" class="sm" name="">元
                </td>
            </tr>
            <tr>
                <th></i>状态：</th>
                <td>
                    <select name="">
                        <option value="">待付款</option>
                        <option value="19">已付款</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>备注：</th>
                <td>
                    <textarea name="discription"></textarea>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" class="btn btn-primary" value="提交">
                    <input type="button" class="btn" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>


@endsection