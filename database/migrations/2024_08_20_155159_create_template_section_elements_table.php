<?php

use App\Models\Template\TemplateSection;
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
        Schema::create('template_section_elements', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(TemplateSection::class)->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->json('data');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_section_elements');
    }
};
