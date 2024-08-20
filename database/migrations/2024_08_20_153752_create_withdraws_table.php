<?php

use App\Models\User;
use App\Models\UserWallet;
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
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(UserWallet::class)->constrained()->cascadeOnDelete();
            $table->double('amount')->default(0);
            $table->double('charge')->default(0);
            $table->double('payable')->default(0);
            $table->string('payment_method');
            $table->json('details');
            $table->json('payment_reference')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdraws');
    }
};
