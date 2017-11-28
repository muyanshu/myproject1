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
            'qq' => 'nullable|digits_between:8,10',
            'password' => 'required|min:6',
            'photo' => 'max:2000|nullable|image',
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
                'qq.digits_between'    => "qq必须是8-10位数字",
                'password.required'=> "密码必须填写",
                'password.min' => "密码需大于6位",
                'photo.max' =>"头像大小最大2M",
                'photo.image' =>"头像必须是图片（jpeg，jpg，gif，bmp）",
            ]
        );
        /*图片上传处理
         *
         *
         */
        $file=$request->file('photo');//获取文件
       // dd($file);
        if($file->isValid()){ //判断是否存在
            //$allow_extensions=['jpg','png','gif'];
            //获取文件相关信息
            $originalName=$file->getClientOriginalName(); //文件原名
            $ext=$file->getClientOriginalExtension();    //扩展名
            $realPath=$file->getRealPath(); //临时文件的绝对路径
            $type=$file->getClientMimeType(); //image/jpeg
            //上传文件
            $filename=date('Y-m-d').'-'.uniqid().'.'.$ext;
            $destinationPath = 'storage/uploads/'; //public 文件夹下面建软链接php artisan storage:link 然后放在 uploads 文件夹
            $file->move($destinationPath ,$filename);
            //使用新建的uploads本地存储空间
           // $bool=Storage::disk('uploads')->put($filename,file_get_contents($realPath));
//            var_dump($file);
//            dd($file);
        }




//        接收数据并保存到数据库
        $users=new user();
        $users->name = $request->input("name");
        $users->status = $request->input("status");
        $users->tel = $request->input("tel");
        $users->email = $request->input("email");
        $users->nickname = $request->input("nickname","");
        $users->realname = $request->input("realname","");
        $users->photo = $filename;
        $users->qq = $request->input("qq","");
        $users->password =md5($request->input("password")) ;
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
    public function edit(User $user)
    {

        return view('admin.user.userEdit',compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //dd($request);
            $id=$request->input("id");

//        验证密码
            $pass=$request->input("password");
        if($pass){
            $this->validate($request,['password' => 'min:6'],['password.min' => "密码必须大于6位"]);
            $user->password = md5("$pass");
        }
//        验证规则
            $this->validate($request,[
                'name' => 'required|string|between:2,8',
                'tel'  => 'required|digits:11|unique:users,tel,'.$id,
                'email'=>'required|email|unique:users,email,'.$id,
                'qq' => 'nullable|digits_between:8,10',
                'photo' => 'max:2000|nullable|image',
            ],
                [
                    "name.required"=> "用户名必须填写",
                    "name.between" => "请输入2-8位的用户名",
                    "tel.required" => "联系方式必须填写",
                    "tel.digits"   => "联系方式不正确，请输入11位的号码",
                    'email.required' => "邮箱必须填写",
                    'email.email'  => "邮箱格式不对",
                    'qq.digits_between' => "qq必须是8-10位数字",
                    'photo.max' =>"头像大小最大2M",
                    'photo.image' =>"头像必须是图片（jpeg，jpg，gif，bmp）",
                ]
            );
        //        接收数据并保存到数据库
       // dd($user);
        $user->name = $request->input("name");
        $user->status = $request->input("status");
        $user->tel = $request->input("tel");
        $user->email = $request->input("email");
        $user->nickname = $request->input("nickname","");
        $user->realname = $request->input("realname","");
        $user->photo = $request->input("photo","");
        $user->qq = $request->input("qq","");
        $user->save();
        return "<script>alert('修改用户成功'); location.href='/admin/user';</script>";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $file=$user->find('photo');//获取文件
        //dd($file);
        if($file){
            if($file->isValid()){
                $path=url('/storage/uploads/').$file;
                unlink($path);
                return $user->delete() ? "ture" : "false";
            }else{
                return $user->delete() ? "ture" : "false";
              }
        }else{
            return $user->delete() ? "ture" : "false";
        }
        //return $user->delete() ? "ture" : "false";
        //return User::find($id)->delete() ? "ture":"false";
    }
}
