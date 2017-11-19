<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
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
    public function news(){
        return view('web.news');
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
