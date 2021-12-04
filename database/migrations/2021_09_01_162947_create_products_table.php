<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('catgory_id');
            $table->string('subcatagory_id')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('product_name');
            $table->string('product_code');
            $table->string('product_qty');
            $table->string('product_details');
            $table->string('product_size');
            $table->string('price');
            $table->string('discount_price')->nullable();
            $table->string('main_slider')->nullable();
            $table->string('hot_deal')->nullable();
            $table->string('best_rated')->nullable();
            $table->string('mid_slider')->nullable();
            $table->string('hot_new')->nullable();
            $table->string('trend')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('products');
    }
}
