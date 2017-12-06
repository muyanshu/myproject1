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
        return self::where("id",$id)->select(["*"])->first();
    }

    public static function getTwoClass($id){
        return self::where("parentid", $id)->orderBy("displayorder","asc")->get(["id","name"]);
    }

    public static function getClassName($id){
        return self::where("id",$id)->select("name")->first();
    }

    public static function getClassParentName($id){
        $parentid = self::where("id",$id)->pluck('parentid');
        if(!empty($parentid)){
            return self::getClassName($parentid);
        }else{
            return false;
        }
    }

    public static function getAll_product(){
        $class_id = self::where("name" , "班级")->pluck('id');
        return self::where("parentid","<>", $class_id)->where("id","<>", $class_id)->orderBy("displayorder","asc")->get(["*"]);
    }
    public static function getProductClass(){
        $class_id = self::where("name" , "班级")->pluck('id');
        if(!empty($class_id)){
            return self::where("parentid", $class_id)->orderBy("displayorder","asc")->get(["id","name"]);
        }else{
            return array();
        }

    }
}
