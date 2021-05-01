<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('postcategory_id');
            $table->unsignedBigInteger('user_id');
            $table->string('title_en', 128)->unique();
            $table->string('title_bn', 128)->unique();
            $table->string('slug');
            $table->longText('description_en');
            $table->longText('description_bn');
            $table->string('image');
            $table->tinyInteger('status')->default(1);
            $table->foreign('postcategory_id')->references('id')->on('post_categories')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('admins')->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
}
