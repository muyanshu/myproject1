<?php
Route::group(["prefix"=>"video"],function(){
    //不需要权限验证的直接访问视频
    Route::get('/getbyname', "VideoDetailController@getByName")->name('getbyname');

    Route::get('/video/{id?}', "VideoController@video")->name('video');

    Route::get('/detail/{product?}', "VideoController@videoDetail")->name('videodetail');

    Route::get('/getvideo/{product?}', "VideoController@getVideo")->name('getvideo');
});

