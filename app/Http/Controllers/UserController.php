<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    get方式  admin/user/
    public function index()
    {
        $rs=user::orderBy("id","desc")->paginate(3);
        return view('admin.user.usermanage',compact("rs"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.userAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        表单验证规则
        $this->validate($request,[
            'name' => 'required|string|between:2,8',
            'tel'  => 'required|digits:11|unique:users,tel',
            'email'=>'required|email|unique:users,email',
            'qq' => 'nullable','digits_between:8,10',
            'password' => 'required|min:6',
        ],
            [
                "name.required"=> "用户名必须填写",
                "name.between" => "请输入2-8位的用户名",
                "tel.required" => "联系方式必须填写",
                "tel.digits"   => "联系方式不正确，请输入11位的号码",
                'tel.unique'  => "号码已经存在",
                'email.required' => "邮箱必须填写",
                'email.email'  => "邮箱格式不对",
                'email.unique'  => "邮箱已经存在",
                'qq.digits'    => "qq必须是8-10位数字",
                'password.required'=> "密码必须填写",
                'password.min' => "密码需大于6位",
            ]
        );
//        接收数据并保存到数据库
        $users=new user();
        $users->name = $request->input("name");
        $users->status = $request->input("status");
        $users->tel = $request->input("tel");
        $users->email = $request->input("email");
        $users->nickname = $request->input("nickname","");
        $users->realname = $request->input("realname","");
        $users->photo = $request->input("photo","");
        $users->qq = $request->input("qq","");
        $users->password = $request->input("password");
        $users->save();
        return "<script>alert('添加用户成功'); location.href='/admin/user';</script>";


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.user.userEdit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
