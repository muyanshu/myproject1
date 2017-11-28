@extends("admin.base")
@section("main")
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="http://myproject1.com/admin">首页</a> &raquo; 添加用户资料
    </div>

    {{--用户添加  start --}}
<div class="result_wrap">
    <form action="/admin/user" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>用户状态：</th>
                <td>
                    <label for="nomal">
                        <input type="radio" name="status" id="nomal" value="1" checked> 正常
                    </label>
                    <label for="limit">
                        <input type="radio" name="status" id="limit" value="2">禁止登录
                    </label>
                    <label for="forever">
                        <input type="radio" name="status" id="forever" value="3">终身vip
                    </label>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>用户名：</th>
                <td>
                    <input type="text" class="sm" name="name"  value="{{old('name')}}"  placeholder="请输入用户名" style="float:left;">
                    {{--表单验证规则--}}
                    @if($errors->has("name"))
                        <div style="color: red; float: left; height:23px;line-height: 30px;">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </td>

            </tr>
            <tr>
                <th><i class="require">*</i>手机号码：</th>
                <td>
                    <input type="text" class="md" name="tel"  value="{{old('tel')}}" placeholder="请输入手机号码"  style="float:left;">
                    {{--表单验证规则--}}
                    @if($errors->has("tel"))
                        <div style="color: red; float: left; height:23px;line-height: 30px;">
                            {{ $errors->first('tel') }}
                        </div>
                    @endif
                </td>
            </tr>

            <tr>
                <th>QQ：</th>
                <td>
                    <input type="text" class="md" name="qq"  value="{{old('qq')}}" placeholder="请输入QQ"  style="float:left;">
                    {{--表单验证规则--}}
                    @if($errors->has("qq"))
                        <div style="color: red; float: left; height:23px;line-height: 30px;">
                            {{ $errors->first('qq') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <th>昵称：</th>
                <td>
                    <input type="text" class="md" name="nickname"  value="{{old('nickname')}}" placeholder="请输入昵称">

                </td>
            </tr>
            <tr>
                <th>姓名：</th>
                <td>
                    <input type="text" class="md" name="realname"  value="{{old('realname')}}" placeholder="请输入真实姓名">
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>Email：</th>
                <td>
                    <input type="text" class="md" name="email"  value="{{old('email')}}" style="float:left;">
                    {{--表单验证规则--}}
                    @if($errors->has("email"))
                        <div style="color: red; float: left; height:23px;line-height: 30px;">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <th>头像图片：</th>
                <td>
                    <input name="photo" type="file"  style="float:left;">
                    {{--表单验证规则--}}
                    @if($errors->has("photo"))
                        <div style="color: red; float: left; height:23px;line-height: 30px;">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>密码：</th>
                <td>
                    <input type="password" class="md" name="password"  value="{{old('password')}}"  style="float:left;">
                    {{--表单验证规则--}}
                    @if($errors->has("password"))
                        <div style="color: red; float: left; height:23px;line-height: 30px;">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" class="btn btn-primary"  value="提交">
                    <input type="button" class="btn  "   onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>

@endsection