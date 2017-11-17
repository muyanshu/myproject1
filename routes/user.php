<?php
Route::group(["prefix"=>"user"],function(){
    Route::get("/manage","MemberController@manage") ;
    Route::post("/manages","MemberController@manages") ;
    Route::get("/cart/{id}/add","CartController@add");
    Route::get("/cart/show","CartController@show") ;
    Route::post("/cart/pay","CartController@pay") ;
    Route::get("/order","OrderController@orderList") ;
    Route::get("/orderdetail/{id}","OrderController@orderdetail") ;
    Route::get("/vcode/{id?}","VcodeController@vcode") ;

    //评论
    Route::get("/commentf/{id?}","CommentController@getComment") ;
    Route::post("/commentf/{id?}","CommentController@putComment") ;
    Route::post("/commentf/{id?}/edit","CommentController@updateComment") ;
    Route::get("/commentbyuser","CommentController@getCommentByUser") ;
});

