<?php

use App\Models\Subscription;
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
        Schema::create('subscription_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Subscription::class)->constrained()->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->double('amount');
            $table->string('status')->nullable();
            $table->string('address')->nullable();
            $table->string('transaction_id');
            $table->string('currency');
            $table->boolean('is_extension_payment')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_payments');
    }
};
