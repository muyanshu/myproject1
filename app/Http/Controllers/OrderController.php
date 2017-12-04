<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
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
                $orm=$orm->Where('ordernumber','like',"%$search%")->orWhere('username','like',"%$search%")->orWhere('pname','like',"%$search%");
            }
            $rs=$orm->offset($offset)->limit($cnt)->get();
            if($search){
                $search="search=$search&";
            }else{
                $search="";
            }
            //$rs=Product::all();
            return view("admin.order.manage",["rs"=>$rs,"page"=>$page,"curr"=>$curr,"max"=>$max,"search"=>$search]);
        }else{
            $this->myRedirect("/admin/order","查找的页面不存在");
        }
        return view("admin.order.manage");
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $id=$order->id;
        $order=Order::find($id);
        return view("admin.order.orderEdit",compact("order"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $id=$request->input("id");
        $num=$request->input("num");
        $price=$request->input("price");
        $status=$request->input("status");
        $detail=$request->input("detail");
        $orm=Order::find($id);
        $orm->num=$num;
        $orm->price=$price;
        $orm->status=$status;
        $orm->detail=$detail;
        $rs=$orm->save();
        if($rs){
            $this->myRedirect("/admin/order","修改成功");
        }else{
            $this->myRedirect("/admin/order","修改失败");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
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

    public function obatchUpdate(Request $request)
    {
        //LOG:info($request);
        $rs=$request->input("dt");
        $rs=array_filter($rs);

        $sql="INSERT orders (id,dorder) VALUES";
        foreach ($rs as $k=>$v){
            $sql.="($k,$v),";
        }
        $sql=trim($sql,",");
        $sql.="ON DUPLICATE KEY UPDATE dorder=VALUES(dorder)";
        if(DB::insert($sql)){
            return 1;
        }else{
            return 0;
        }

    }

    public function myRedirect($url,$msg){
        echo "<script>
                alert('$msg');
                location.href='$url'
            </script>";
    }
}
