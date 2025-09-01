<?php
use App\Http\Controllers\Api\BrandController;

Route::get('/brands', [BrandController::class, 'index']);
