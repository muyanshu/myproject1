<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name")->comment("类型名称");
            $table->float("price")->comment("类型价格");
            $table->integer("sort")->default(0)->comment("产品类型父类");
            $table->string("url")->nullable()->comment("产品外链");
            $table->text("desc")->nullable()->comment("类型描述");
            $table->smallInteger("order")->default(0)->comment("类型排序");
            $table->tinyInteger("status")->default(0)->comment("类型状态");
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
        Schema::dropIfExists('product_types');
    }
}
