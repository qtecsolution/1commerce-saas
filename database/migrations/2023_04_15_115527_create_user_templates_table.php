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
            $table->foreignIdFor(Template::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->string('company_name');
            $table->string('company_slug')->unique();
            $table->string('fav_icon')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('product_name')->nullable();
            $table->double('shipping_cost_inside_dhaka')->default(0);
            $table->double('shipping_cost_outside_dhaka')->default(0);
            $table->double('product_price')->default(0);
            $table->string('product_currency')->default('BDT');
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
