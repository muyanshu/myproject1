<?php

namespace App\Http\Controllers;
use App\Permission;
use App\Role;
use App\RolePermission;
use App\RoleUser;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $role=new role();
        $num=$role->count(); //统计总数
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
                    $role = $role->Where("$sname", 'like', "%$search1%");
                }else{
                    return "<script>alert('请选择类型！'); location.href='/admin/permission';</script>";
                }
            }
            $rs = $role->offset($offset)->orderBy('id','desc')->limit($cnt)->get(); //分页显示
            if($search1){
                $search = "search=$search1&";
            } else {
                $search = "";
            }
            return view("admin.permission.list", compact("rs", "curr", "max", "search", "search1", "page"));
        }else{
            return "<script>alert('已经没有页面了！'); location.href='/admin/permission';</script>";
        }
        return view("admin.permission.list");
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
        //

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
