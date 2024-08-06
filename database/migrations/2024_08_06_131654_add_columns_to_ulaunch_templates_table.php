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
        Schema::table('ulaunch_templates', function (Blueprint $table) {
            $table->string('nav_color')->after('global_area')->default('#20bea7');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ulaunch_templates', function (Blueprint $table) {
            $table->dropColumn('nav_color');
        });
    }
};
