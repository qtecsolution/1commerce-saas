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
        Schema::table('user_templates', function (Blueprint $table) {
            $table->string('fav_icon')->nullable();
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->string('currency')->nullable()->default('BDT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_templates', function (Blueprint $table) {
            $table->dropColumn('fav_icon');
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('currency');
        });
    }
};
