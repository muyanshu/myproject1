<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'category';

    public static function getOneClass(){
        return self::where("parentid",0)->orderBy("displayorder","asc")->get(["id","name"]);
    }
    public static function getAll(){
        return self::orderBy("displayorder","asc")->get(["*"]);
    }

    public static function getClass($id){
        return self::where("id",$id)->select()->first();
    }

    public static function getTwoClass($id){
        return self::where("parentid", $id)->orderBy("displayorder","asc")->get(["id","name"]);
    }

    public static function getClassName($id){
        return self::where("id",$id)->select("name")->first();
    }
    //显示父类和子类
    public static function getAllClass(){
        $sort=self::getOneClass();  //获取父类
        $child=self::select(["id","name","displayorder","parentid"])->get(); //获取子类
        $str = "";
        foreach ($sort as $v){
            $str .= "<option value='{$v->id}' >{$v->name}</option>"; //循环显示父类id
            foreach($child as $v1){     //循环显示子类
                if($v->id==$v1->parentid){   //判断父类id是否跟parentid字段相等
                    self::where("parentid","=",$v->id)->get(["id","name"]); //查找parentid等于当前父id的数据
                    $str .= "<option value='{$v1->id}'>&nbsp; &nbsp; &nbsp; &nbsp;|-- {$v1->name}</option>";
                }
            }
        }
        return $str;
    }

    //显示父类和子类
    public static function getInClass($rid){
        $sort=self::getOneClass();  //获取父类
        $child=self::select(["id","name","displayorder","parentid"])->get(); //获取子类
        $str = "";
        foreach ($sort as $v){
            $sel = "";
            if($rid == $v->id){
                $sel = "selected";
            }
            $str .= "<option value='{$v->id}' {$sel}>{$v->name}</option>"; //循环显示父类id
            foreach($child as $v1){     //循环显示子类
                $sel = "";
                if($rid == $v1->id){
                    $sel = "selected";
                }
                if($v->id==$v1->parentid){   //判断父类id是否跟parentid字段相等
                    self::where("parentid","=",$v->id)->get(["id","name"]); //查找parentid等于当前父id的数据
                    $str .= "<option value='{$v1->id}'{$sel}>&nbsp; &nbsp; &nbsp; &nbsp;|-- {$v1->name}</option>";
                }
            }
        }
        return $str;
    }

}
