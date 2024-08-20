<?php

use App\Models\Template\UserTemplate;
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
        Schema::create('template_seo_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(UserTemplate::class)->constrained()->cascadeOnDelete();
            $table->json('tags')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_seo_tags');
    }
};
