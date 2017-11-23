@extends("admin.base")
@section("main")
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="http://myproject1.com/admin">首页</a> &raquo; <a href="/admin/permission">用户权限管理</a> &raquo; 添加用户权限
    </div>
    <!--面包屑导航 结束-->
    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>返回用户权限</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
    <div class="result_wrap">
        <form action="#" method="post">

            {{--所属角色--}}

            <table class="add_tab1">
                <tbody>
                <tr>
                    <th><i class="require">*</i>权限描述：</th>
                    <td>
                        <input type="text" class="lg" name="" placeholder="请输入名称">
                    </td>
                </tr>
                <tr>
                    <th width="120"><i class="require">*</i>权限类型：</th>
                    <td>
                        <select name="">
                            <option value="">==请选择==</option>
                            <option value="19">开启</option>
                            <option value="20">关闭</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="确定添加">
                        <input type="button" class="back" onclick="history.go(-1)" value="返回">
                    </td>
                </tr>
                </tbody>
            </table>


        </form>
    </div>
@endsection