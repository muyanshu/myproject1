<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    protected $fillable = ["resource_type","resource_id"];

    public function getRoles()
    {
        $roles = [];
        $role = RolePermission::where("permission_id","=",$this->id)->get(["role_id"]);
        foreach ($role as $v){
            $roles[] =  $v->role_id;
        }
        return $roles;
    }
}
