<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Template\UlaunchTemplateController;

Route::prefix('ulaunch')->group(function () {
    Route::post('update-hero-area', [UlaunchTemplateController::class, 'updateHeroArea']);
});