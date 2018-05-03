<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderitems', function ($table) {
            $table->increments('item_id');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('order_id')->on('orders');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('product_id')->on('products');
            //Thêm trường số lượng sản phẩm muốn order
            $table->integer('quantity');
            //Tính giá tiền từng item
            $table->float('item_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderitems');
    }
}
