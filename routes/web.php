<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/checkout', [PaymentController::class, 'checkout'])->name('checkout');
Route::post('/session', [PaymentController::class, 'session'])->name('session');
Route::get('/success', [PaymentController::class, 'success'])->name('success');