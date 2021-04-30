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
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();

            $table->string('product_title')->unique();
            $table->string('slug')->unique();
            $table->integer('product_code');
            $table->integer('product_quantity');

            $table->longText('product_details');

            $table->string('product_color');
            $table->string('product_size');
            $table->decimal('selling_price', 8, 2);

            $table->decimal('discount_price', 8, 2)->nullable();
            $table->string('video_link')->nullable();
            $table->tinyInteger('main_slider')->default(0);
            $table->tinyInteger('hot_deal')->default(0);
            $table->tinyInteger('best_rated')->default(0);
            $table->tinyInteger('hot_new')->default(0);
            $table->tinyInteger('trand')->default(0);

            $table->string('image_one');
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->tinyInteger('status')->default(1);

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
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
