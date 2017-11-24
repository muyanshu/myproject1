@extends("admin.base")
@section("main")
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="http://myproject1.com/admin">首页</a> &raquo; 添加用户资料
    </div>

    {{--用户添加  start --}}

    <div class="result_wrap">
       {{-- <form class="form-horizontal">
            <div class="form-group">
                <label for="nomal"><input type="radio" name="radio" id="nomal">正常</label>
                <label for="limit"><input type="radio" name="radio" id="limit">禁止登录</label>
                <label for="forever"><input type="radio" name="radio" id="forever">终身vip</label>
            </div>--}}

            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="user_status" class="col-sm-2 control-label">用户状态：</label>
                    <div class="col-sm-6">
                        <div class="radio">
                            <label for="nomal">
                                <input type="radio" name="radio" id="nomal" value="option1" checked> 正常
                            </label>
                            <label for="limit">
                                <input type="radio" name="radio" id="limit" value="option2">禁止登录
                            </label>
                            <label for="forever">
                                <input type="radio" name="radio" id="forever" value="option2">终身vip
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_name" class="col-sm-2 control-label">用户名：</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="user_name" placeholder="请输入用户名">
                    </div>
                    <label for="mobile" class="col-sm-2 control-label">手机号：</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="mobile" placeholder="请输入手机号">
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_qq" class="col-sm-2 control-label">qq号：</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="user_qq" placeholder="请输入qq号">
                    </div>
                    <label for="nickname" class="col-sm-2 control-label">昵称：</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="nickname" placeholder="请输入昵称">
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_email" class="col-sm-2 control-label">Email：</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="user_email" placeholder="请输入邮箱">
                    </div>
                    <label for="person_name" class="col-sm-2 control-label">姓名：</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="person_name" placeholder="请输入姓名">
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_name" class="col-sm-2 control-label">用户名：</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="user_name" placeholder="请输入用户名">
                    </div>
                    <label for="mobile" class="col-sm-2 control-label">手机号：</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="mobile" placeholder="请输入手机号">
                    </div>
                 </div>
                <div class="form-group">
                    <label for="user_name" class="col-sm-2 control-label">头像图片：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="user_name" placeholder="图片">
                    </div>
                    {{--头像图片 -----可替换的
                    <div style="position:relative;margin-top:1em;">
                         <div class="btn btn-primary">
                             上传图片
                         </div>
                         <img src=" " class="img-responsive" alt="">
                         <input type="file" multiple style="position: absolute;left:0px;top:0px;opacity:0;height:28px;" name="pic[]">
                         <br>
                     </div>
                     <div id="ImgPr"  >

                     </div>--}}
                </div>

                <div class="form-group">
                    <label for="user_name" class="col-sm-2 control-label">新密码：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="user_name" placeholder="新密码">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">下次请记住我
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">登录</button>
                    </div>
                </div>
            </form>
    </div>

    <script type="text/javascript">
        //实例化编辑器
        //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
        UE.getEditor('content',{initialFrameWidth:1500,initialFrameHeight:210,});
    </script>
@endsection