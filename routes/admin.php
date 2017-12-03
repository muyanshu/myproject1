<?php
Route::group(["prefix"=>"admin"],function(){
    Route::get("/","AdminController@index");

    //产品类型路由
    Route::resource("productType","ProductTypeController");
    Route::post("productType/batchUpdate","ProductTypeController@batchUpdate");

    //产品路由
    Route::resource("product","ProductController");
    Route::post("product/batchUpdate","ProductController@batchUpdate");
    Route::post("product/{id}/update","ProductController@update");
    Route::post("product/picUpload","ProductController@picUpload");
    Route::get("product/statusx/{id}","ProductController@statusx");
    Route::post("product/search","ProductController@index");

    //角色路由
    Route::post("role/batchUpdate","RoleController@batchUpdate");
    Route::post("role/deleteAll","RoleController@deleteAll");
    Route::resource("role","RoleController");

    //用户路由
    Route::post("user/batchUpdate","UserController@batchUpdate");
    Route::post("user/deleteAll","UserController@deleteAll");
    Route::resource("user","UserController");

    //权限路由
    Route::resource("permission","PermissionController");

    //订单路由
    Route::get("order","OrderController@index");
    Route::post("orderdel","OrderController@destroy");
    Route::get("orderedit/{order}","OrderController@edit");
    Route::post("orderupdate","OrderController@update");
    Route::get("orderdetail","OrderDetailController@index");
    Route::post("detaildel","OrderDetailController@destroy");
    Route::get("detailedit/{order}","OrderDetailController@edit");
    Route::post("detailupdate","OrderDetailController@update");

});
