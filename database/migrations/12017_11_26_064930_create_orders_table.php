<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ordernumber')->comment("订单编号")->nullable();
            $table->string('username')->comment("订单人")->nullable();
            $table->string('pname')->comment("商品名称")->nullable();
            $table->Integer('num')->default(0)->comment("数量");
            $table->double('price')->default(0)->comment("商品价格");
            $table->double('sprice')->default(0)->comment("市场价格");
            $table->tinyInteger('status')->default(1)->comment("订单状态");
            $table->tinyInteger("dorder")->default(0)->comment("排序");
            $table->string('detail')->default("多买多优惠")->comment("备注");
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
        Schema::dropIfExists('orders');
    }
}
