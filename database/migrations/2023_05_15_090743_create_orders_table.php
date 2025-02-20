<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->foreignId('user_id')->index();
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
            $table->string('order_number');
            $table->enum('status', ['pending', 'processing', 'shipped', 'completed', 'decline'])->default('pending');
            $table->decimal('grand_total', 10, 2);
            $table->integer('item_count');
            $table->enum('payment_method', ['cash_on_delivery', 'orange_money', 'afri_money', 'card', 'paypal'])->default('cash_on_delivery');

            $table->string('shipping_address');
            $table->string('shipping_city');
            $table->string('shipping_zipcode');
            $table->string('shipping_phone');
            $table->string('notes')->nullable();
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
};
