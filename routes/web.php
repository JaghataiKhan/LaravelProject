<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRequest;
use App\Models\Product;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/portfolio/{product:slug}', function(Product $product) {
    return view('product', ['product' => $product]);
});

Route::post('/user-request', [UserRequest::class, 'store']);

