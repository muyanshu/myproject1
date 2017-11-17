<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

include 'web1.php';
include 'admin.php';
include 'user.php';
include 'video.php';
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/student', 'StudentController@index')->name('student');
Route::get('/auth/callback', 'HomeController@callback')->name('callback');

//gates
Route::put('tasks/{task}', function (App\Task $task) {
    abort_unless(Gate::allows('update', $task), 403);
    $task->update(request()->input());
});

Route::get("/alipay","AlipayController@index");