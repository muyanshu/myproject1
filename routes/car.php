<?php
Route::group(["prefix"=>"car"],function (){
    Route::get("/add/{id}/","CarController@add");
    Route::get("/show","CarController@show");
    Route::get("/adcr/{id}/","CarController@adcr");
    Route::get("/decr/{id}/","CarController@decr");
    Route::get("/del/{id}","CarController@del");
    Route::get("/pay/{id}","CarController@pay");
    Route::get("/allpay","CarController@allpay");
    Route::get("/zpay/{id}","CarController@zpay");
});