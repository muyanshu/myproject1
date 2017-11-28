@extends("admin.base")
@section("main")
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="http://myproject1.com/admin">首页</a> &raquo; 修改用户资料
    </div>

    {{--用户添加  start --}}
<div class="result_wrap">
    <form action="#" method="post">
        <table class="add_tab">
            <tbody>
            <tr>

                <th width="120"><i class="require">*</i>用户状态：</th>

                <td>
                    <label for="nomal">
                        <input type="radio" name="radio" id="nomal" value="option1" checked> 正常
                    </label>
                    <label for="limit">
                        <input type="radio" name="radio" id="limit" value="option2">禁止登录
                    </label>
                    <label for="forever">
                        <input type="radio" name="radio" id="forever" value="option2">终身vip
                    </label>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>用户名：</th>
                <td>
                    <input type="text" class="sm" name="" placeholder="用户名">
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>手机号码：</th>
                <td>
                    <input type="text" class="md" name="" placeholder="请输入手机号码">
                </td>
            </tr>

            <tr>
                <th><i class="require">*</i>QQ：</th>
                <td>
                    <input type="text" class="md" name="" placeholder="请输入QQ">
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>昵称：</th>
                <td>
                    <input type="text" class="md" name="" placeholder="请输入昵称">
                </td>
            </tr>
            <tr>
                <th>姓名：</th>
                <td>
                    <input type="text" class="md" name="" placeholder="请输入真实姓名">
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>Email：</th>
                <td>
                    <input type="text" class="md" name="">
                </td>
            </tr>
            <tr>
                <th>头像图片：</th>
                <td>
                    <input name="pics" type="file">
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>旧密码：</th>
                <td>
                    <input type="text" class="md" name="">
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>新密码：</th>
                <td>
                    <input type="text" class="md" name="">
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>所属角色：</th>
                <td>
                    1.<input type="checkbox" name="">总管理员&nbsp&nbsp；
                    2.<input type="checkbox" name="">前端vip&nbsp&nbsp；
                    3.<input type="checkbox" name="">前端基础班&nbsp&nbsp；
                    4.<input type="checkbox" name="">前端高级班&nbsp&nbsp；</br>
                    5.<input type="checkbox" name="">后台基础班&nbsp&nbsp；
                    6.<input type="checkbox" name="">后台高级班&nbsp&nbsp；
                    7.<input type="checkbox" name="">全栈班&nbsp&nbsp；
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