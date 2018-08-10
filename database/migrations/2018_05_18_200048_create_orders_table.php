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
            $table->boolean('status');
            $table->string('order_list');
            $table->string('order_quantity')->nullable();
            $table->string('price_list');
            $table->string('adress');
            $table->string('name');
            $table->string('number');
            $table->string('delivery_method')->nullable();
            $table->string('amount');
            $table->string('articuls')->nullable();
            $table->string('city')->nullable();
            $table->string('city')->nullable();
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
