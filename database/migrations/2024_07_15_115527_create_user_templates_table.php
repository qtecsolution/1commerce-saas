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
        Schema::create('user_templates', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Template::class)->constanted()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constanted()->cascadeOnDelete();
            $table->string('company_name');
            $table->string('company_logo')->nullable();
            $table->string('product_name');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_templates');
    }
};
