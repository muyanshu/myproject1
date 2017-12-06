<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $role=new role();
//        $num=$role->count(); //统计总数
//        $cnt=3;
//        $max=ceil($num/$cnt); //最大值
//        $arr=range(1,$max);
//        $curr=isset($_GET['page'])?$_GET['page']:1;
//        $sname=request()->input("sname","");
//        $search1=request()->input("search",""); //查询
//        if(in_array($curr,$arr)){ //分页
//            $left=max(1,$curr-1);
//            $right=min($left+2,$max);
//            $left=max(1,$right-2);
//            $page=[];
//            for($i=$left;$i<=$right;$i++){
//                $page[$i]="page=".$i;
//            }
//            $offset=($curr-1)*$cnt;
//            if ($search1) {  //数据查询like
//                if($sname){
//                    $role = $role->Where("$sname", 'like', "%$search1%");
//                }else{
//                    return "<script>alert('请选择类型！'); location.href='/admin/role';</script>";
//                }
//            }
//            $rs = $role->offset($offset)->orderBy('roleorder','asc')->limit($cnt)->get(); //分页显示
//            if($search1){
//                $search = "search=$search1&";
//            } else {
//                $search = "";
//            }
//            return view("admin.role.list", compact("rs", "curr", "max", "search", "search1", "page"));
//        }else{
//            return "<script>alert('已经没有页面了！'); location.href='/admin/role';</script>";
//        }
         $rs=role::orderBy("roleorder","asc")->paginate(3);
        return view("admin.role.list",compact("rs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.role.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:5',
            'status'=>'required',
            'description' => 'required|string|max:100',

        ],
            [
                "name.required"    =>"用户名是必填字段",
                "name.max"          =>"用户名不能超过5个字",
                "status.required"  =>"状态必须填写",
                "description.required"=>"描述必须填写",
            ]
        );
        // 获取所有的方法 dd($request->all());
        $role=new role();
        $role->name = $request->input("name","默认值");
        $role->status = $request->input("status");
        $role->description=$request->input("description");
        $role->save();
        return "<script>alert('添加用户组成功'); location.href='/admin/role';</script>";

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
    public function edit(Role $role)
    {
        return view("admin.role.edit",compact("role"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Role $role)
    {
        $this->validate($request,[
            'name' => 'required|string|max:5',
            'status'=>'required',
            'description' => 'required|string|max:100',

        ],
            [
                "name.required"    =>"用户名是必填字段",
                "name.max"          =>"用户名不能超过5个字",
                "status.required"  =>"状态必须填写",
                "description.required"=>"描述必须填写",
            ]
        );
        $role->name = $request->input("name","默认值");
        $role->status = $request->input("status");
        $role->description=$request->input("description");
        $role->save();
        return "<script>alert('修改用户组成功'); location.href='/admin/role';</script>";
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        return $role->delete() ? "ture" : "false";
    }
    /*
     * 删除全部
     */
    public  function  deleteAll(Request $request){
        $id = $request->input('str');
        $role = new role();
        if($id) {
            $str = explode(",", $id);
            foreach ($str as $v) {
                $role->where('id', "=", "$v")->delete();
            }
            return "ture";
        }else{
            return "false";
            }
    }

    /*
    * 更新排序
    */
    public function  batchUpdate(Request $request){
        $rs = $request->input("ids");
        $rs = array_filter($rs);    //过滤空数组
        $sql = "INSERT roles(id,`roleorder`) VALUES";
        foreach ($rs as $key => $val) {
            $sql .= "($key,$val),";
        }
        $sql = trim($sql, ",");
        $sql .= " ON DUPLICATE KEY UPDATE `roleorder` = VALUES(`roleorder`);";
        if(DB::insert($sql)){
            return "200";
        }else{
            return "500";
        }
    }
}
