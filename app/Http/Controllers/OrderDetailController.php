<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orm=new Order();
        $num=$orm->count();
        $cnt=3;
        $max=ceil($num/$cnt);
        $arr=range(1,$max);
        $curr=isset($_GET['page'])?$_GET['page']:1;
        $search=request()->get("search","");
        if(in_array($curr,$arr)){
            $left=max(1,$curr-1);
            $right=min($left+2,$max);
            $left=max(1,$right-2);
            $page=[];
            for($i=$left;$i<=$right;$i++){
                $page[$i]="page=".$i;
            }
            $offset=($curr-1)*$cnt;
            if($search){
                $orm=$orm->Where('ordernumber','like',"%$search%")->orWhere('username','like',"%$search%")->orWhere('product_name','like',"%$search%");
            }
            $rs=$orm->offset($offset)->limit($cnt)->get();
            if($search){
                $search="search=$search&";
            }else{
                $search="";
            }
            //$rs=Product::all();
            return view("admin.order.detailmanage",["rs"=>$rs,"page"=>$page,"curr"=>$curr,"max"=>$max,"search"=>$search]);
        }else{
            $this->myRedirect("/admin/orderdetail","查找的页面不存在");
        }
        return view("admin.order.detailmanage");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Order $order)
    {
        $id=$order->id;
        $order=Order::find($id);
        return view("admin.order.detailedit",compact("order"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $id=$request->input("id");
        $price=$request->input("price");
        $status=$request->input("status");
        $remark=$request->input("remark");
        $orm=Order::find($id);
        $orm->price=$price;
        $orm->status=$status;
        $orm->remark=$remark;
        $rs=$orm->save();
        if($rs){
            $this->myRedirect("/admin/orderdetail","修改成功");
        }else{
            $this->myRedirect("/admin/orderdetail","修改失败");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=$request->input("id");
        $rs=Order::find($id)->delete();
        if($rs){
            return "删除成功";
        }else{
            return "删除失败";
        }
    }

    public function batchUpdate(Request $request)
    {
        //LOG:info($request);
        $dt=$request->input("dt");
        $dt=array_filter($dt);

    }

    public function myRedirect($url,$msg){
        echo "<script>
                alert('$msg');
                location.href='$url'
            </script>";
    }
}
