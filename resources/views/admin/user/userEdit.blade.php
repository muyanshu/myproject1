@extends("admin.base")
@section("main")
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="http://myproject1.com/admin">首页</a> &raquo; 修改用户资料
    </div>

    {{--用户修改  start --}}
<div class="result_wrap">
    <form action="/admin/user/{{$user->id}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="put"/>
        <input type="hidden" value="{{$user->id}}" name="id">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>

                <th width="120"><i class="require">*</i>用户状态：</th>

                <td>
                    <label for="nomal">
                        <input type="radio" name="status" id="nomal" value="1" {{($user->status==1) ? "checked" : ""}}> 正常
                    </label>
                    <label for="limit">
                        <input type="radio" name="status" id="limit" value="2" {{($user->status==2) ? "checked" : ""}}>禁止登录
                    </label>
                    <label for="forever">
                        <input type="radio" name="status" id="forever" value="3" {{($user->status==3) ? "checked" : ""}}>终身vip
                    </label>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>用户名：</th>
                <td>
                    <input type="text" class="sm" name="name" value="{{$user->name}}"  style="float:left;">
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
                    <input type="text" class="md"  name="tel" value="{{$user->tel}}"  style="float:left;">
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
                    <input type="text" class="md" name="qq" value="{{$user->qq}}" style="float:left;">
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
                    <input type="text" class="md" name="nickname" value="{{$user->nickname}}" >
                </td>
            </tr>
            <tr>
                <th>姓名：</th>
                <td>
                    <input type="text" class="md"  name="realname" value="{{$user->realname}}" >
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>Email：</th>
                <td>
                    <input type="text" class="md" name="email" value="{{$user->email}}" style="float:left;">
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
                    <input name="photo" type="file" style="float:left;">
                    @if($user->photo != '')
                        <img src="{{url("/storage/uploads")}}/{{$user->photo}}"  hight="50px" width="50px" style="float:left;" >
                    @else
                        暂无头像
                    @endif
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>密码：</th>
                <td>
                    <input type="password" class="md" name="password" value="" placeholder="留空表示不修改" style="float:left;">
                    {{--表单验证规则--}}
                    @if($errors->has("password"))
                        <div style="color: red; float: left; height:23px;line-height: 30px;">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
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