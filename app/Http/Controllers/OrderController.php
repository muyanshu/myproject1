<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

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
        if(in_array($curr,$arr)){
            $left=max(1,$curr-1);
            $right=min($left+2,$max);
            $left=max(1,$right-2);
            $page=[];
            for($i=$left;$i<=$right;$i++){
                $page[$i]="page=".$i;
            }
            $offset=($curr-1)*$cnt;
            $rs=Order::offset($offset)->limit($cnt)->get();
            //$rs=Product::all();
            return view("admin.order.manage",["rs"=>$rs,"page"=>$page,"curr"=>$curr,"max"=>$max]);
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
        return view("admin.order.orderEdit");
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function myRedirect($url,$msg){
        echo "<script>
                alert('$msg');
                location.href='$url'
            </script>";
    }
}
