@extends("admin.base")

@section("css")
    <link rel="stylesheet" href="{{asset('/css/jquery-ui.min.css')}}">
@endsection



@section("main")
<div class="panel panel-info">
    <div class="panel-heading ">修改用户资料</div>
    <div class="panel-body">
        <div class="row">
            <form action="/admin/user/{{$user->id}}" method="post">
                <div class="col-xs-3">
                    <div class="panel panel-danger">
                        <div class="panel-heading ">所属角色</div>
                        <div class="panel-body">
                            @foreach($role as $v)

                            {{$v->id}}

                            <input id="role{{$v->id}}" type="checkbox" @if(in_array($v->id,$roles)) checked @endif name="roles[]" value="{{$v->id}}">
                            <label for="role{{$v->id}}">{{$v->name}}</label>
                            <br>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xs-9">
                    <input type="hidden" name="_method" value="put"/>
                    <input type="hidden" value="{{$user->id}}" name="id">
                    {{csrf_field()}}

                    <div class="form-group form-inline">
                        <label>*用户状态：</label>
                        <input name="status" type="radio" value="1" {{($user->status==1) ? "checked" : ""}}> 正常
                        <input  name="status" type="radio" value="4" {{($user->status==4) ? "checked" : ""}}> 禁止登录
                        <input  name="status" type="radio" value="9" {{($user->status==9) ? "checked" : ""}}> 终身VIP
                    </div>
                    <div class="form-group form-inline">
                        <label for="datepicker">*VIP到期时间：</label> <input    name="expire" id="datepicker" class="form-control input-default" type="text" value="{{$user->expire}}"  >

                    </div>
                    <div class="form-group form-inline">
                        <label for="name">*用户名：</label> <input id="name"  name="name" class="form-control input-default" type="text" value="{{$user->name}}"  >
                        <label for="tel">*手机：</label> <input id="tel"  name="tel" class="form-control input-default" type="text" value="{{$user->tel}}"  >
                    </div>


                    <div class="form-group form-inline">
                        <label for="qq">*qq号：</label>  <input id="qq"  name="qq"   class="form-control" type="text" value="{{$user->qq}}"  >
                        <label for="url">*昵称：</label>  <input id="nickname"  name="nickname"   class="form-control" type="text" value="{{$user->nickname}}"  >
                    </div>

                    <div class="form-group form-inline">
                        <label for="url">*Email：</label>  <input id="email"  name="email"   class="form-control" type="text" value="{{$user->email}}"  >
                        <label for="realname">姓名：</label>  <input id="realname"  name="realname"   class="form-control" type="text" value="{{$user->realname}}"  >
                    </div>
                    <div class="form-group form-inline">
                        <label for="photo">头像图片：</label>  <input id="photo"  name="photo" style="width: 70%;" class="form-control" type="text" value="{{$user->photo}}"  >
                    </div>
                    <div class="form-group form-inline">
                        <label for="qqopenid">qqopenid：</label>  <input id="qqopenid"  readonly name="qqopenid" style="width: 70%;" class="form-control" type="text" value="{{$user->qqopenid}}"  >
                    </div>
                    <div class="form-group form-inline">
                        <label for="wxopenid">wxopenid：</label>  <input id="wxopenid" readonly  name="wxopenid" style="width: 70%;" class="form-control" type="text" value="{{$user->wxopenid}}"  >
                    </div>
                    <div class="form-group form-inline">
                        <label for="wxopenid">aliopenid：</label>  <input id="wxopenid" readonly name="wxopenid" style="width: 70%;" class="form-control" type="text" value="{{$user->aliopenid}}"  >
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

@section("jsbottom")
<script src="{{asset('/js/jquery-ui.min.js')}}"></script>
 <script>
    $( function() {
        $( "#datepicker" ).datepicker({
            dateFormat: "yy-mm-dd"
        });
    } );
</script>
@endsection
