<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/razorpay', [PaymentController::class, 'index'])->name('razorpay.index');
Route::post('/razorpay/payment', [PaymentController::class, 'handlePayment'])->name('razorpay.payment');

