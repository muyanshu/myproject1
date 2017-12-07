<?php

namespace App\Http\Controllers;

use App\Http\Model\ProductType;
use App\Http\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $children  = array();
        $category = ProductType::getAll();

        foreach ($category as $index => $row){
            if (!empty($row['parentid'])) {
                $children[$row['parentid']][] = $row;
                unset($category[$index]);
            }
        }
        return view("admin.products.type",compact("category","children"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rs = ProductType::getOneClass();
        return view("admin.products.typeAdd",compact("rs"));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productType = new ProductType();
        $productType->parentid = $request->input('parentid');
        if(trim($request->input('name'))!=""){
            $productType->name = $request->input('name');
            $productType->save();
            return redirect("/admin/productType");
        }else{
            $rs = ProductType::getOneClass();
            $img = "产品类型不能为空!";
            return view("admin.products.typeAdd",compact("rs","img"));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rs = ProductType::getClass($id);
        $rs_Class = ProductType::getOneClass();
        return view("admin.products.typeEdit",compact("rs","rs_Class"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $productType = ProductType::find($request->input('id'));
        $productType->parentid = $request->input('parentid');
        $productType->name = $request->input('name');
        $productType->status = $request->input('status');
        $productType->url = $request->input('url');
        $productType->thumb = $request->input('thumb');
        $productType->description = $request->input('description');
        $rs = $productType->save();
        if($rs){
            return redirect("/admin/productType");
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (ProductType::where("parentid", $id)->count()) {
            return "501"; //本类型下有子类型
        }
        if (Product::where("course_cate", $id)->orwhere("class_cate", $id)->count()) {
            return "502"; //本栏目下有内容不能删除
        }

        return ProductType::find($id)->delete() ? "200":"500";
    }

    //批量更新
    public function batchUpdate(Request $request)
    {

        $rs = $request->input("ids");
        $rs = array_filter($rs);    //过滤空数组
        $sql = "INSERT category(id,`displayorder`) VALUES";
        foreach ($rs as $key => $val) {
            $sql .= "($key,$val),";
        }
        $sql = trim($sql, ",");
        $sql .= " ON DUPLICATE KEY UPDATE `displayorder` = VALUES(`displayorder`)";
        //return $sql;
        if(DB::insert($sql)){
            return "200";
        }else{
            return "500";
        }
    }
}
