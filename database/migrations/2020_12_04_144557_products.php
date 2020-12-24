<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("slug");
            $table->string("sku");
            $table->integer("price");
            $table->integer("compareAtPrice");
            $table->string("images");
            $table->string("badges");
            $table->integer("rating");
            $table->integer("reviews");
            $table->string("availability");
            $table->string("brand");
            $table->string("categories");
            $table->string("attributes");
            $table->string("compatibility");
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
        Schema::drop('products');
    }
}
