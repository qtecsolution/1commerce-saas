<?php

use App\Models\User;
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
        Schema::create('ulaunch_templates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->json('global_area')->nullable();
            $table->json('menu_area')->nullable();
            $table->json('hero_area')->nullable();
            $table->json('steps_area')->nullable();
            $table->json('features_area')->nullable();
            $table->json('about_area')->nullable();
            $table->json('testimonials_area')->nullable();
            $table->json('info_area')->nullable();
            $table->json('order_area')->nullable();
            $table->json('footer_area')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulaunch_templates');
    }
};
