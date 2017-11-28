<?php
Route::group(["prefix"=>"admin"],function(){
    Route::get("/","AdminController@index");
    Route::resource("productType","ProductTypeController");
    Route::post("productType/batchUpdate","ProductTypeController@batchUpdate");
    Route::resource("product","ProductController");
    Route::post("product/batchUpdate","ProductController@batchUpdate");
    Route::get("product/statusx/{id}","ProductController@statusx");
    Route::resource("role","RoleController");
    Route::resource("user","UserController");
    Route::resource("permission","PermissionController");
    Route::resource("order","OrderController");
    Route::resource("orderdetail","OrderDetailController") ;

});
