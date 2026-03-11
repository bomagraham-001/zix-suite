<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LaundryController;



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

Route::get('/shop_page', [ShopController::class, 'shop_page'])->name('shop_page');

Route::get('product', [ProductController::class, 'product'])->name('product_page');
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');

//ENQUIRY ROUTES

Route::get('/enquiry', [EnquiryController::class, 'create'])->name('enquiry.form');
Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.submit');

//CART ROUTES
Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');


//LAUNDRY ROUTES
Route::get('/laundry', [LaundryController::class, 'index'])->name('laundry.index');


Route::view('/about', 'pages.about')->name('about');

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
