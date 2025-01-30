<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',[\App\Http\Controllers\TestHelperController::class, 'index']);
Route::get('/post-wordpress', [\App\Http\Controllers\WordPressPostController::class, 'index']);
Route::get('/post-shopify', [\App\Http\Controllers\ShopifyPostController::class, 'index']);
