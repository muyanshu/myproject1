<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
<<<<<<< HEAD
=======
    public $roles = [];
    public $permission = [];
    public $resource = [];
    public $isAdmin = 0;

    protected $fillable = [
        'name','tel', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    //获取用户角色
    public function getRoles($cache=0)
    {
        if($cache==1) {
            //前端过来的走缓存路线，后台过来忽略
            $role = session()->get("userroles");
            if (!empty($role)) {
                return $role;
            }
        }

        $roles = [];
        $role = RoleUser::where("user_id","=",$this->id)->get(["role_id"]);
        foreach ($role as $v){
            $roles[] =  $v->role_id;
        }
        session(["userroles"=>$roles]);
        $this->roles = $roles;
        return $roles;
    }

    //获取用户对资源的访问权限
    public function getPermission($cache=0){
        if($cache==1){
            //如果是前端过来的走缓存路线
            $permission = session()->get("userpermission");
            if(!empty($permission)){
                return $permission;
            }
        }

        $roles = $this->getRoles();
        $permission = [];
        foreach ($roles as $v){
            $rs = RolePermission::where("role_id",$v)->get(["permission_id"])->toArray();
            foreach ($rs as $v){
                if(in_array($v["permission_id"],$permission)){
                    continue;
                }
                $permission[] = $v["permission_id"];
            }
        }
        session(["userpermission"=>$permission]);
        $this->permission = $permission;
        return $permission;
    }

    //根据权限id，获取所有权限可以访问的资源类型和id
    public function getResource($cache=0){
        if($cache==1) {
            $resource = session()->get("resource");
            if (!empty($resource)) {
                return $resource;
            }
        }
        $permission  =$this->getPermission();
        $resource = Permission::whereIn("id",$permission)->get(["resource_id","resource_type"]);
        $resource = $resource->toArray();
        foreach ($resource as $v){
            $this->resource[] = $v["resource_id"];
        }
        session(["resource"=>$this->resource]); //缓存起来
        return $this->resource;
    }

    //根据id获取用户名
    public static function getNameById($id){
        return User::where("id",$id)->select("name","nickname","photo")->first();
    }
>>>>>>> 83779ec07fee37bc1145d2e0987007c1d1ff8021

}
