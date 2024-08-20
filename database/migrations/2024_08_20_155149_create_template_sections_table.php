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
        Schema::create('template_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(UserTemplate::class)->constrained()->cascadeOnDelete();
            $table->string('section');
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('bg_color')->default('#ffffff');
            $table->string('text_color')->default('#000000');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_sections');
    }
};
