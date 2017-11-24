<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment("登录必填用户名");
            $table->string('password');
            $table->string('tel')->unique()->comment("手机号码必填");
            $table->tinyInteger("status")->default(1)->comment("状态");
            $table->string('nickname')->nullable()->comment("昵称默认为登录账号");
            $table->string('realname')->nullable()->comment("真实姓名默认为登录账号");
            $table->string('photo')->nullable()->comment("头像url");
            $table->dateTime('expire')->nullable()->comment("VIP过期时间");
            $table->string('email')->unique()->comment("邮箱");
            $table->string('qq')->nullable()->comment("QQ");
            $table->string('qqopenid')->nullable()->commet("qq关联");
            $table->string('wxopenid')->nullable()->commet("微信关联");
            $table->string('aliopenid')->nullable()->commet("支付宝关联");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
