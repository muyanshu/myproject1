<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    //对数据库的读写一定要写到这里

    //一个人做，都行。
    public static  function getRolesId(){
        $rs =  self::select("id")->get()->toArray() ;
        return array_map(function  ($rs){  return $rs["id"]; }, $rs);
    }


}
