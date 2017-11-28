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
            $table->string('ordernumber')->comment("订单编号");
            $table->string('username')->comment("订单人");
            $table->string('product_name')->comment("商品名称");
            $table->float('price')->comment("商品价格");
            $table->tinyInteger('status')->default(1)->comment("订单状态");
            $table->string('remark')->comment("备注");
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
