<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

 Route::get('/products', [ProductController::class, 'index']); // Get all products
 Route::get('/products/{id}', [ProductController::class, 'show']); // Get a single product by ID
 Route::post('/products', [ProductController::class, 'store']); // Create a new product
 Route::put('/products/{id}', [ProductController::class, 'update']); // Update a product
 Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Delete a product
