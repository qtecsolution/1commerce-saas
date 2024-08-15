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
        Schema::create('order_form_additional_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(UserTemplate::class)->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('type');
            $table->string('placeholder')->nullable();
            $table->text('default_value')->nullable();
            $table->boolean('is_required')->default(false);
            $table->json('options')->nullable()->comment("JSON for options (e.g., for select, radio, etc.)");
            $table->integer('order')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_form_additional_fields');
    }
};
