<?php

namespace App\Http\Controllers;

use App\ProductType;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orm = ProductType::where(["sort"=>0])->orderBy("order","asc")->select(["id","name","order","sort"]);
        $rs = $orm->paginate(5);
        return view("admin.products.type",compact("rs"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->get("id",0);
        $rs = ProductType::getSort();
        return view("admin.products.typeAdd",compact("rs","id"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sort = $request->input("sort");
        $name = $request->input("name");
        $productType = new ProductType();
        $productType->sort = $sort;
        $productType->name = $name;
        $productType->save();
        return  redirect("/admin/productType");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function show(ProductType $productType)
    {
        echo  "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductType $productType)
    {
        $rs = ProductType::getSort();
        $product= $productType;
        $pid = $product->sort;
        return view("admin.products.typeEdit",compact("rs","pid","product"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductType $productType)
    {
        $productType->name = $request->input("name");
        $productType->sort = $request->input("sort",0);
        $productType->order = $request->input("order",1);
        $productType->url = $request->input("url","");
        $productType->desc = $request->input("desc","");
        $productType->price = $request->input("price",16880);
        $productType->status = $request->input("status",1);
        $productType->pic = $request->input("pic",1);
        $rs = $productType->save();
        if($rs){
            $refer = $_SERVER["HTTP_REFERER"];
            return redirect($refer);
        }

    }

    //批量更新
    public function batchUpdate(Request $request)
    {

        $rs = $request->input("ids");
        $rs = array_filter($rs);    //过滤空数组
        $sql = "INSERT product_types(id,`order`) VALUES";
        foreach ($rs as $key => $val) {
            $sql .= "($key,$val),";
        }
        $sql = trim($sql, ",");
        $sql .= " ON DUPLICATE KEY UPDATE `order` = VALUES(`order`)";

       if(DB::insert($sql)){
           return "200";
       }else{
           return "500";
       }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductType  $productType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductType $productType)
    {

        if (ProductType::where("sort", $productType->id)->count()) {
            return "501"; //本类型下有子类型
        }
        if (Product::where("sort_id", $productType->id)->orWhere("class_id",$productType->id)->count()) {
            return "502"; //本栏目下有内容不能删除
        }

        return $productType->delete() ? "200" : "500";
    }
}
