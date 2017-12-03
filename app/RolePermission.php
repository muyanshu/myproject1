<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    //知识点一：关闭数据库的timestamps
    public $timestamps = false;
    protected $fillable = ['role_id', 'permission_id'];
}
