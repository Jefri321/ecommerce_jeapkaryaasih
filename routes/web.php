<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;


Route::get('/auth/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/auth/daftar', function () {
    return view('auth.register');
})->name('register');


Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/detail', function () {
    return view('pages.detail');
})->name('detail');


Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout');

// Route::get('/payment', function () {
//     // return view('pages.payment');
// })->name('payment');


Route::get('/payment/{id}', [PaymentController::class, 'createSnap'])->name('payment');
