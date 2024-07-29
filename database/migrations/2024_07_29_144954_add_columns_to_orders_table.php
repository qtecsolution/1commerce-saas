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
        Schema::table('orders', function (Blueprint $table) {
            $table->double('price')->after('customer_address')->default(0);
            $table->integer('quantity')->after('price')->default(1);

            $table->dropColumn('customer_id');
            $table->dropColumn('order_from');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('customer_id')->default(0);
            $table->string('order_from')->default('website');

            $table->dropColumn('price');
            $table->dropColumn('quantity');
        });
    }
};
