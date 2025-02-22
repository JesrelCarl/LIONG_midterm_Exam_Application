<?php
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);
Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
});
