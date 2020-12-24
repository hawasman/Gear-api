<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("token");
            $table->string("number");
            $table->string("payment");
            $table->string("status");
            $table->string("items");
            $table->string("quantity");
            $table->string("subtotal");
            $table->string("totals");
            $table->string("total");
            $table->string("shippingAddress");
            $table->string("billingAddress");
            $table->timestamps();
        });

        Schema::create('orders_total', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("price");
            $table->timestamps();
        });

        Schema::create('orders_options', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("value");
            $table->timestamps();
        });

        Schema::create('orders_items', function (Blueprint $table) {
            $table->id();
            $table->string("product");
            $table->string("options");
            $table->float("price");
            $table->integer("quantity");
            $table->integer("total");
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
        Schema::drop('orders');
        Schema::drop('orders_total');
        Schema::drop('orders_options');
        Schema::drop('orders_items');
    }
}
