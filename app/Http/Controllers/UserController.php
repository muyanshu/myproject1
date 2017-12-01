<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
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
        $user=new user();
        $num=$user->count(); //统计总数
        $cnt=3;
        $max=ceil($num/$cnt); //最大值
        $arr=range(1,$max);
        $curr=isset($_GET['page'])?$_GET['page']:1;
        $sname=request()->input("sname","");
        $search1=request()->input("search",""); //查询
        if(in_array($curr,$arr)){ //分页
                $left=max(1,$curr-1);
                $right=min($left+2,$max);
                $left=max(1,$right-2);
                $page=[];
                for($i=$left;$i<=$right;$i++){
                    $page[$i]="page=".$i;
                }
                $offset=($curr-1)*$cnt;
                        if ($search1) {  //数据查询like
                            if($sname){
                                $user = $user->Where("$sname", 'like', "%$search1%");
                            }else{
                                return "<script>alert('请选择类型！'); location.href='/admin/user';</script>";
                            }
                     }
                            $rs = $user->offset($offset)->orderBy('id','desc')->limit($cnt)->get(); //分页显示
                            if($search1){
                            $search = "search=$search1&";
                        } else {
                            $search = "";
                        }
                        return view("admin.user.usermanage", compact("rs", "curr", "max", "search", "search1", "page"));
            }else{
                return "<script>alert('已经没有页面了！'); location.href='/admin/user';</script>";
            }
        return view("admin.user.usermanage");
//        $rs=user::orderBy("id","desc")->paginate(3);
//        return view('admin.user.usermanage',compact("rs"));
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
            [   "name.required"=> "用户名必须填写",
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
        $users=new user();
        $file=$request->file('photo');//获取文件
        if($file) { //判断是否存在
            $this->image($file,$users);//图片处理
        }
//        接收数据并保存到数据库
        $users->name = $request->input("name");
        $users->status = $request->input("status");
        $users->tel = $request->input("tel");
        $users->email = $request->input("email");
        $users->nickname = $request->input("nickname","");
        $users->realname = $request->input("realname","");
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $role = Role::all();
        //$roles = $user->getRoles();
        return view('admin.user.userEdit',compact("user","role"));
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
                'photo' => 'max:255|nullable|image',
            ],
                [   "name.required"=> "用户名必须填写",
                    "name.between" => "请输入2-8位的用户名",
                    "tel.required" => "联系方式必须填写",
                    "tel.digits"   => "联系方式不正确，请输入11位的号码",
                    'email.required' => "邮箱必须填写",
                    'email.email'  => "邮箱格式不对",
                    'qq.digits_between' => "qq必须是8-10位数字",
                    'photo.max' =>"头像大小最大255",
                    'photo.image' =>"头像必须是图片（jpeg，jpg，gif，bmp）",
                ]
            );
        $file=$request->file('photo');//获取文件
        if($file) { //判断是否存在
            $this->uImg($file,$user);//图片更新处理
        }
        //        接收数据并保存到数据库
        $user->name = $request->input("name");
        $user->status = $request->input("status");
        $user->tel = $request->input("tel");
        $user->email = $request->input("email");
        $user->nickname = $request->input("nickname","");
        $user->realname = $request->input("realname","");
        $user->qq = $request->input("qq","");
        $user->expire = $request->input("expire","");
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
        $file=$user->photo;//获取图片
        if($file){
                $path=public_path('storage/uploads/').$file;
                unlink($path);
                return $user->delete() ? "ture" : "false";
            } else{
                return $user->delete() ? "ture" : "false";
              }
    }

     /*图片上传处理
      *
      *
      */
    public function image($file,$user){
            //获取文件相关信息
            $originalName=$file->getClientOriginalName(); //文件原名
            $ext=$file->getClientOriginalExtension();    //扩展名
            $realPath=$file->getRealPath(); //临时文件的绝对路径
            $type=$file->getClientMimeType(); //image/jpeg
            //上传文件
            $filename=date('Y-m-d').'-'.uniqid().'.'.$ext;
            $destinationPath = 'storage/uploads/'; //public 文件夹下面建软链接php artisan storage:link 然后放在 uploads 文件夹
            $rs=$file->move($destinationPath ,$filename);
            return   $user->photo = $filename;
    }

     /*图片更新上传处理
      *删除旧图片，替换新图片
      *
      */
    public function uImg($file,$user){
        $files=$user->photo;//获取图片
        if($files){
            $path=public_path('storage/uploads/').$files;
            unlink($path);//删除原图片
            $this->image($file,$user);
        }
    }

    /*
    * 批量删除功能
    */
    public  function  deleteAll(Request $request){
        $id = $request->input('str');
        if($id){
            $str = explode(",",$id);
            $user=new user();
            foreach($str as $v){
                $users=$user->where('id',"=","$v")->first();
                $file=$users->photo;//获取图片
                if($file){
                    $path=public_path('storage/uploads/').$file;
                    unlink($path);
                    $users->where('id',"=","$v")->delete();
                } else{
                    $users->where('id',"=","$v")->delete();

                }
            }
            return "ture";
        }else{
            return "false";
        }


    }

}
