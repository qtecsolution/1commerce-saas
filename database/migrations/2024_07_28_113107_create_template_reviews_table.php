<?php

use App\Models\Template\Template;
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
        Schema::create('template_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Template::class)->constanted()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constanted()->cascadeOnDelete();
            $table->text('review')->nullable();
            $table->string('rating')->nullable();
            $table->string('reviewer_name')->nullable();
            $table->string('reviewer_bio')->nullable();
            $table->string('reviewer_image')->nullable();
            $table->integer('position')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_reviews');
    }
};
