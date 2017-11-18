<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    //
    public function index(){
        return view('web.index');
    }
    public function about(){
        return view('web.about');
    }
    public function news(){
        return view('web.news');
    }
}
