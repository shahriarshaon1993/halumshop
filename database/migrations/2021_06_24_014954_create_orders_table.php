<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_id')->nullable();
            $table->double('paying_amount')->nullable();
            $table->string('blnc_transection')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('currency')->nullable();
            $table->string('stripe_order_id')->nullable();
            $table->double('subtotal')->nullable();
            $table->string('shipping')->nullable();
            $table->integer('vat')->nullable();
            $table->double('amount')->nullable();
            $table->tinyInteger('return_status')->default(0);
            $table->string('status')->nullable();
            $table->tinyInteger('status_op')->default(0);
            $table->string('status_code')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
