<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', function () {
    return view('login');
    
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
    
});

Route::view('/register','register');
Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::post('/add_to_cart',[ProductController::class,'addToCart']);
Route::get('/cartlist',[ProductController::class,'cartList']);
Route::get('delete_from_cart/{id}',[ProductController::class,'deleteFromCart']);
Route::get('/order',[ProductController::class,'order']);
Route::post('/orderpay',[ProductController::class,'orderpay']);
Route::get('/myorders',[ProductController::class,'myorders']);
Route::post('/register',[UserController::class,'register']);




