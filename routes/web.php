<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('shop')->name('shop.')->group(function () {
    Route::get('/', [ShopController::class, 'index'])->name('index');
    Route::get('/{product}', [ShopController::class, 'show'])->name('show');
});
Route::get('/products/{product}', [ProductController::class, 'show'])
    ->name('products.show');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::view('/about', 'pages.about')->name('about');

Route::prefix('enquiries')->name('enquiry.')->group(function () {
    Route::get('/', [EnquiryController::class, 'index'])->name('index');
    Route::post('/', [EnquiryController::class, 'submit'])
        ->middleware('throttle:5,1')
        ->name('submit');
});

Route::get('/search', function () {
    return view('pages.search');
})->name('search');

Route::get('/account', function () {
    return view('pages.account');
})->name('Account');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart.index');

Route::get('/laundry', function () {
    return view('pages.laundry');
})->name('laundry');

Route::fallback(function () {
    return view('errors.404');
});
