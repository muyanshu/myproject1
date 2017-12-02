<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->comment("分类名称")->nullable();
            $table->tinyInteger("parentid")->default(0)->comment("上级分类ID,0为第一级");
            $table->tinyInteger("status")->default(1)->comment("状态:1上架 默认,0下架");
            $table->string("url")->comment("外链网址")->nullable();
            $table->string("thumb")->comment("图片地址")->nullable();
            $table->string("description")->comment("描述")->nullable();
            $table->tinyInteger("displayorder")->default(0)->comment("排序");
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
        Schema::dropIfExists('category');
    }
}
