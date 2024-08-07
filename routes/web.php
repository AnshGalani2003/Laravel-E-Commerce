<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;


Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::view("/login", "login");

Route::post("/login", [UserController::class, 'login']);
Route::get("/", [ProductController::class, 'index']);
Route::get("detail/{id}", [ProductController::class, 'detail']);
Route::get("search", [ProductController::class, 'search']);
Route::post("add_to_cart", [ProductController::class, 'addToCart']);
Route::get("cartlist", [ProductController::class, 'CartList']);
Route::get("removecart/{id}", [ProductController::class, 'removeCart']);
Route::get("order", [ProductController::class, 'order']);
Route::post("orderplace", [ProductController::class, 'orderPlace']);
Route::get("myorder", [ProductController::class, 'myOrder']);
