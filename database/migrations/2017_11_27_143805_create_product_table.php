<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger("course_cate")->default(0)->comment("所属课程ID");
            $table->tinyInteger("class_cate")->default(0)->comment("所属班级ID");
            $table->string("name")->comment("产品名称")->nullable();
            $table->string("thumb")->comment("图片地址")->nullable();
            $table->double('price', 11, 2)->comment('价格')->default('0');
            $table->double('value', 11, 2)->comment('价值')->default('0');
            $table->string("video_url")->comment("视频地址")->nullable();
            $table->text("detail")->comment("描述")->nullable();
            $table->tinyInteger("status")->default(1)->comment("状态:1上架 默认,0下架");
            $table->tinyInteger("displayorder")->default(0)->comment("排序");
            $table->integer("visit_1")->default(0)->comment("访问量");
            $table->integer("visit_2")->default(0)->comment("虚拟量");
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
        Schema::dropIfExists('product');
    }
}
