<?php
Route::group(["prefix"=>"admin"],function(){
    Route::get("/","AdminController@index");
    Route::resource("productType","ProductTypeController");
    Route::post("productType/batchUpdate","ProductTypeController@batchUpdate");
    Route::resource("product","ProductController");
    Route::post("product/batchUpdate","ProductController@batchUpdate");
    Route::post("product/{id}/update","ProductController@update");
    Route::post("product/picUpload","ProductController@picUpload");
    Route::get("product/statusx/{id}","ProductController@statusx");

    Route::post("product/search","ProductController@index");

    Route::post("role/deleteAll","RoleController@deleteAll");

    Route::resource("role","RoleController");
    Route::post("user/deleteAll","UserController@deleteAll");
    Route::resource("user","UserController");

    Route::resource("permission","PermissionController");

    Route::get("order","OrderController@index");
    Route::post("orderdel","OrderController@destroy");
    Route::get("orderedit/{order}","OrderController@edit");
    Route::post("orderupdate","OrderController@update");
    Route::post("obatchupdate","OrderController@batchUpdate");

    Route::get("orderdetail","OrderDetailController@index");
    Route::post("detaildel","OrderDetailController@destroy");
    Route::get("detailedit/{order}","OrderDetailController@edit");
    Route::post("detailupdate","OrderDetailController@update");
    Route::post("debatchupdate","OrderDetailController@batchUpdate");

});
