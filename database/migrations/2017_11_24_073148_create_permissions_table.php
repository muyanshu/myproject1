<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->nullable()->comment("权限名称");
            $table->tinyInteger("porder")->default(0)->comment("排序");
            $table->string("url")->comment("访问地址");
            $table->tinyInteger("level")->default(4)->comment("权限等级增删查改这里只有只读");
            $table->integer("resource_type")->default(1)->comment("资源类型1是产品");
            $table->integer("resource_id")->nullable()->comment("资源id");
            $table->string("expire")->comment("权限到期时间");
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
        Schema::dropIfExists('permissions');
    }
}
