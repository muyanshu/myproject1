<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //
    public static function getSort($pid=0){
        return self::where("sort", $pid)->orderBy("order","asc")->get(["id","name"]);
    }

    public static function getSubSort($pid=1){
        return self::where("sort","=",$pid)->orderBy("order","asc")->select(["id","name","order","sort"])->get();
    }

    //获取所有字段
    public static function getSubSortColumn($pid=1){
        return self::where("sort","=",$pid)->orderBy("order","asc")->get();
    }

    public static function getSortOption($selectid=0,$pid=0){
        $sort = self::getSort($pid);
        $str = "";
        foreach ($sort as $v){
            $sel = "";
            if($selectid == $v->id){
                $sel = "selected";
            }
            $str .= "<option value='{$v->id}' {$sel} >{$v->name}</option>";
            $sub = self::getSubSort($v->id);
            foreach ($sub as $v2){
                $sel = "";
                if($selectid == $v2->id){
                    $sel = "selected";
                }
                $str .= "<option value='{$v2->id}' {$sel} >&nbsp; &nbsp; &nbsp; &nbsp; |- {$v2->name}</option>";
            }
        }

        return $str;
    }
    public static function getSortNameById($id){
        if(empty($id)){
            return  new self();
        }
        return self::where("id",$id)->select("name")->first();
    }
}
