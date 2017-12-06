<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Model\Product;
use App\Order;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function add($id){
        if(!Auth::user()){
            $this->myRedirect("/login","请先登录");
        }else{
            $username=Auth::user()->name;
            $rs=Product::find($id,['id','name','price','value']);
            $pname=$rs->name;
            $orm=new Order;
            $od=$orm->where('pname',"$pname")->where('username',"$username")->first();
            if(!empty($od)){
                $od->num+=1;
                if($od->save()){
                    $this->myRedirect("/products","加入购物车成功");
                }else{
                    $this->myRedirect("/products","加入购物车失败");
                }
            }else{
                $orm->ordernumber=mt_rand(10000000,99999999);
                $orm->username=$username;
                $orm->pname=$pname;
                $orm->num=1;
                $orm->price=$rs->price;
                $orm->sprice=$rs->value;
                if($orm->save()){
                    $this->myRedirect("/products","加入购物车成功");
                }else{
                    $this->myRedirect("/products","加入购物车失败");
                }
            }
        }
    }
    public function adcr($id){
        /*$this->car=session("car");
        $this->car[$id]["num"]+=1;
        Session(["car"=>$this->car]);
        echo "
          <script> 
            location.href='/car/show';
          </script>  
        ";*/
        $rs=Order::find($id);
        $rs->num+=1;
        if($rs->save()){
            echo "
          <script> 
            location.href='/car/show';
          </script>  
        ";
        }
    }
    public function decr($id){
        /*$this->car=session("car");
        if(isset($this->car[$id])){
            $this->car[$id]["num"]-=1;
        }
        if($this->car[$id]["num"]==0){
            $this->del();
        }
        Session(["car"=>$this->car]);
        echo "
          <script> 
            location.href='/car/show';
          </script>  
        ";*/
        $rs=Order::find($id);
        $rs->num-=1;
        if($rs->num==0){
            $this->del($id);
        }
        if($rs->save()){
            echo "
          <script> 
            location.href='/car/show';
          </script>  
        ";
        }
    }
    public function del($id){
        /*$this->car=session("car");
        unset($this->car[$id]);
        Session(["car"=>$this->car]);
        $this->myRedirect("/car/show","删除成功");*/
        $rs=Order::find($id)->delete();
        if($rs){
            $this->myRedirect("/car/show","删除成功");
        }else{
            $this->myRedirect("/car/show","删除失败");
        }
    }
    public function show(){
        $orm=new Order;
        $rs=$orm->get();
        $allprice=0;
        $sallprice=0;
        if(!empty($rs)){
            foreach ($rs as $k=>$v){
                $allprice=$allprice+$v->price*$v->num;
                $sallprice=$sallprice+$v->sprice*$v->num;
            }
        }
        return view("web.carshow",["rs"=>$rs,'allprice'=>$allprice,'sallprice'=>$sallprice]);
    }
    public function pay($id){
        /*$this->car=\session("car");
        $name=$this->car[$id]["name"]." ".$this->car[$id]["num"]."件";
        $money=$this->car[$id]["price"]*$this->car[$id]["num"];
        $detail=$this->car[$id]["detail"];
        return view("web.pay",["name"=>$name,"money"=>$money,"detail"=>$detail]);*/
        $rs=Order::find($id);
        return view("web.pay",["rs"=>$rs,]);
    }
    public function allpay(){
        /*$this->car=session("car");
        $allprice=0;
        $name="";
        $detail="";
        if(!empty($this->car)){
            foreach ($this->car as $k=>$v){
                $allprice=$allprice+$v["price"]*$v["num"];
                $name=$v["name"];
            }
        }
        $name=$name."等";
        return view("web.pay",["name"=>$name,"money"=>$allprice,"detail"=>$detail]);*/
        $orm=new Order;
        $rs=$orm->get();
        $ordernumber=mt_rand(10000000,99999999);
        $num=0;
        $allprice=0;
        foreach ($rs as $k=>$v){
            $num=$num+$v->num;
            $allprice=$allprice+$v->num*$v->price;
        }
        return view("web.allpay",['ordernumber'=>$ordernumber,'num'=>$num,'allprice'=>$allprice]);
    }
    public function zpay($id){
        $rs=Product::find($id,["name","price"]);
        $rs->ordernumber=mt_rand(10000000,99999999);
        $rs->pname=$rs->name;
        $rs->num=1;
        $rs->detail="多买多优惠";
        return view("web.pay",['rs'=>$rs]);
    }
    public function myRedirect($url,$message){
        echo "
          <script>
            alert('$message');
            location.href='$url';
          </script>  
        ";
    }
}
