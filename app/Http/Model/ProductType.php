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
}
