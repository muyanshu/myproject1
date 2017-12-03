<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'product';

    public static function getProduct($id){
        return self::where("id",$id)->select(["*"])->first();
    }
}
