<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('brand_id')->nullable();
            $table->foreignId('category_id');
            $table->string('title');
            $table->string('photo')->nullable();
            $table->string('sku')->unique()->nullable();
            $table->longText('description')->nullable();
            $table->double('price');
            $table->double('purchase_amount')->default(0);
            $table->string('discount_type')->nullable();
            $table->double('discount_amount')->default(0);
            $table->integer('quantity')->default(0);
            $table->tinyInteger('is_variation')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
