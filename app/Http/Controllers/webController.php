<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\product;

class WebController extends Controller
{
    //首页
    public function index(){
        return view('web.index');
    }
//    简介
    public function about(){
        return view('web.about');
    }
//    博客新闻
    public function newslist(){
        $news=Product::where("class_cate","=","13")->orderBy("updated_at","desc")->paginate(3);
        return view('web.newslist',compact("news"));
    }
    //新闻详情
    public function news($id){
        $news=product::where("id","=",$id)->select()->first();
        $pre=Product::where([["class_cate","=","13"],['id','<',$id]])->orderby("id","desc")->first(["id","name"]);
       //dd($pre);
        $next=Product::where([["class_cate","=","13"],['id','>',$id]])->orderby("id","asc")->first(["id","name"]);
        //dd($next);
        return view('web.news',compact("news","pre","next"));
    }
//    产品页面
    public function products(){
        return view('web.products');
    }
//    图文页面
    public function piclist(){
        return view('web.piclist');
    }
//    视频教程页面
    public function videoCourse()
    {
        return view('web.videoCourse');
    }
}
