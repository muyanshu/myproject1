<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Validator::extend('code', function($attribute, $value, $parameters, $validator) {
            //验证码检测
            $userInput = request()->get('code');
            if (Session::get('code') == $userInput) {
                return true ;
            }else{
                return false;
            }
            });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
