<?php

Route::get('/', "webController@index");
Route::get('index', "webController@index")->name('index');

Route::get('about/{id?}', "webController@about")->name('about');

Route::get('/list', "webController@news")->name('list');

Route::get('/piclist/{id?}', "webController@piclist")->name('piclist');
Route::get('/products','ProductController@products');
//Route::get('/products/{id?}', "webController@products")->name('products');
Route::get('/video/{id?}',"webController@videoCourse");
Route::get('content/{id?}', "webController@content")->name("content");

Route::get('piclist', function ($id = 0) {
    return view('web.piclist');
})->name("content");

Route::get('/msg', "msgController@msg")->name('msg') ;
#Route::get('/msg', "msgController@msg")->name('msg')->middleware("auth");
Route::get('/vcode', "msgController@getVCode")->name('vcode');
Route::post('msgs', "msgController@msgs")->name('msgs');

Route::get('/msg/update/{id}', "msgController@update")->name('msgupdate') ;