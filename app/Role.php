<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    //对数据库的读写一定要写到这里

    //一个人做，都行。

  public static function getRolesId(){
        $rs=self::select("id")->get()->toarray();//toarray() id创建并组合成数组
        $rss= function($rs){
         return $rs["id"];
          };
        return array_map($rss,$rs);//array_map 将用户自定义函数作用到数组中的每个值上，并返回用户自定义函数作用后的带有新值的数组。
//    返回出ayyay（'0'=>'1','1'=>2）;0->key,1->value;
  }



}
