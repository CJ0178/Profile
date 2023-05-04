<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/detail', function() {
    return view('detail');
});

Route::get('/', [ProdukController::class, 'index'])->name('home');
Route::get('/product/{id}', [ProdukController::class, 'show'])->name('product.show');

Route::get('/success', function () {
    return view('success_form');
});

// Auth::routes();
