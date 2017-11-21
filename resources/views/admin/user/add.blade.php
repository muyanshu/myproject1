@extends("admin.base")
@section("main")
<div class="panel panel-info">
    <div class="panel-heading ">修改用户资料</div>
    <div class="panel-body">
        <div class="row">
            <form action="/admin/user" method="post" enctype="multipart/form-data">
                <div class="col-xs-9">
                    {{csrf_field()}}
                    <div class="form-group form-inline">
                        <label>*用户状态：</label>
                        <input name="status" type="radio" value="1"  > 正常
                        <input  name="status" type="radio" value="4" > 禁止登录
                        <input  name="status" type="radio" value="9" > 终身VIP
                    </div>
                    <div class="form-group form-inline">
                        <label for="name">*用户名：</label> <input id="name"  name="name" class="form-control input-default" type="text" >
                        <label for="tel">*手机：</label> <input id="tel"  name="tel" class="form-control input-default" type="text" >
                    </div>


                    <div class="form-group form-inline">
                        <label for="qq">*qq号：</label>  <input id="qq"  name="qq"   class="form-control" type="text" >
                        <label for="url">*昵称：</label>  <input id="nickname"  name="nickname"   class="form-control" type="text" >
                    </div>

                    <div class="form-group form-inline">
                        <label for="url">*Email：</label>  <input id="email"  name="email"   class="form-control" type="text" >
                        <label for="realname">姓名：</label>  <input id="realname"  name="realname"   class="form-control" type="text" >
                    </div>
                    <div class="form-group form-inline">
                        <label for="photo">头像图片：</label>  <input id="photo"  name="photo" style="width: 70%;" class="form-control" type="text" >
                    </div>

                    <div class="form-group form-inline">
                        <label for="password">新密码：</label>  <input id="password"  name="password" style="width: 70%;" class="form-control" type="text" placeholder="留空代表不修改"  >
                    </div>
                    <input class="btn btn-info" type="submit" value="确定修改">
                </div>
        </div>



        </form>

    </div>
</div>
@endsection