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
        Schema::create('tracking_apis', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(UserTemplate::class)->constrained()->cascadeOnDelete();
            $table->longText('fb_varification_key')->nullable();
            $table->longText('fb_pixel_value')->nullable();
            $table->longText('gtm_head_value')->nullable();
            $table->longText('gtm_body_value')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracking_apis');
    }
};
