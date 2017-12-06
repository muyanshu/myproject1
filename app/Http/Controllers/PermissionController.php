<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\Http\Model\ProductType;
use App\RolePermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission=new permission();
        $sname=request()->input("sname","");
        $search1=request()->input("search","");
            if ($search1) {  //数据查询like
                if($sname){
                    $permission = $permission->Where("$sname", 'like', "%$search1%");
                }else{
                    return "<script>alert('请选择类型！'); location.href='/admin/permission';</script>";
                }
            }
            $rs = $permission->orderBy('porder','desc')->get(); //显示
            return view("admin.permission.list", compact("rs","search1"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $role = Role::all();
        return view("admin.permission.add",compact("role"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //验证规则
        $this->validate($request,[
            'name' => 'required|string',
            'resource_id'=>'required',
        ],
            [
            'name.required'  => "权限名称必须填写",
            'resource_id.required'    => "请选择资源类型",
            ]);
        $permission=new permission();
        $permission->name=$request->input("name");
        $permission->resource_id=$request->input("resource_id");
        $permission->save();
        //角色处理
        $permissions = $request->input("roles",[]);
        foreach($permissions as $v){     //插入新角色权限
            $rolepermissions = RolePermission::firstOrNew(['role_id' => $v, 'permission_id' => $permission->id]);
            $rolepermissions->save();
        }
        return "<script>alert('添加权限成功'); location.href='/admin/permission';</script>";

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
    public function edit(Permission $permission)
    {
        //
        $role = Role::all();
        $roles = $permission->getRoles();
        return view("admin.permission.edit",compact("role","roles","permission"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        //验证规则
        $this->validate($request,[
            'name' => 'required|string',
            'resource_id'=>'required',
        ],
            [
                'name.required'  => "权限名称必须填写",
                'resource_id.required'    => "请选择资源类型",
            ]);
        $permission->name=$request->input("name");
        $permission->resource_id=$request->input("resource_id");
        $permission->save();
        //角色处理
        $roles = $request->input("roles",[]);
        $allroles =  Role::getRolesId();//获取所有角色id
        $rolesCancel =  array_diff($allroles,$roles); //计算原role的id跟input的差集，取消的id；
        foreach ($rolesCancel as $v){ //删除取消的权限
            RolePermission::where(["role_id"=>$v,"permission_id"=>$permission->id])->delete();
        }
        foreach($roles as $v){     //插入新角色权限
            $rolepermissions = RolePermission::firstOrNew(['role_id' => $v, 'permission_id' => $permission->id]);
            $rolepermissions->save();
        }
        return "<script>alert('修改权限成功'); location.href='/admin/permission';</script>";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        rolepermission::where('permission_id',"=",$permission->id)->delete();
        return $permission->delete() ? "ture" : "false";
    }

    /*
   * 批量删除功能
   */
    public  function  deleteAll(Request $request){
        $id = $request->input('str');
        if($id){
            $str = explode(",",$id);
            $permission=new permission();
            foreach($str as $v){
                rolepermission::where('permission_id',"=","$v")->delete();
                $permission->where('id',"=","$v")->delete();
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
        $sql = "INSERT permissions(id,`porder`) VALUES";
        foreach ($rs as $k => $v) {
            $sql .= "($k,$v),";
        }
        $sql = trim($sql, ",");
        $sql .= " ON DUPLICATE KEY UPDATE `porder` = VALUES(`porder`);";
        if(DB::insert($sql)){
            return "200";
        }else{
            return "500";
        }
    }
}
