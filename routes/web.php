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

Route::prefix('/payment', function () {
    Route::get('/', function () {
        return view('pages.payment');
    })->name('payment');

    Route::get('/success', function () {
        return view('pages.payment.success');
    })->name('payment.success');
    Route::get('/pending', function () {
        return view('pages.payment.pending');
    })->name('payment.pending');

    Route::get('/failed', function () {
        return view('pages.payment.failed');
    })->name('payment.failed');
});

// Route::get('/payment', function () {
//     // return view('pages.payment');
// })->name('payment');


Route::get('/payment/{id}', [PaymentController::class, 'createSnap'])->name('payment');
