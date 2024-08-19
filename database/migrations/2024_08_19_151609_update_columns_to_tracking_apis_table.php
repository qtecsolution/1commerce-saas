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
        Schema::table('tracking_apis', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('gtm_head_key');

            $table->foreignIdFor(UserTemplate::class)->constrained()->cascadeOnDelete();
            $table->longText('gtm_head_value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tracking_apis', function (Blueprint $table) {
            //
        });
    }
};
