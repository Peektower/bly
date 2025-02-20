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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->index();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
            $table->string('code')->unique();
            $table->string('slug');
            $table->string('name');
            $table->string('image')->nullable();
            $table->text('description');
            $table->integer('discount')->nullable();
            $table->integer('quantity');
            $table->decimal('price');
            $table->timestamp('expire_date');
            $table->enum('status', ['approve', 'unApprove'])->default('approve');
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
};
