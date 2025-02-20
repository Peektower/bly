<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::controller(HomeController::class)->group(function (){
   Route::get('/', 'index')->name('home');
   Route::get('/shop', 'shop')->name('shop');
   Route::get('/shop/category/{category}', 'categoryShow')->name('category.show');
   Route::get('/product/{product}', 'product')->name('product.show');

   Route::get('/user-account', 'account')->name('user.account');
   Route::get('/user-wishlist', 'wishlist')->name('user.wishlist');
   Route::get('/user-cart', 'cart')->name('user.cart');
   Route::get('/user-order', 'order')->name('user.order');

});

Route::prefix('admin')->group(function (){
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::middleware('auth')->group(function (){
        Route::controller(AdminController::class)->group(function (){
            Route::get('/dashboard', 'index')->name('admin.dashboard');
            Route::get('/customers', 'customers')->name('admin.customers');
        });

        Route::controller(ProductController::class)->group(function (){
            Route::get('/products', 'index')->name('admin.products');
            Route::post('/products', 'store')->name('admin.products-store');
            Route::get('/product/add', 'create')->name('admin.product-create');
            Route::get('/product/{product}/edit', 'edit')->name('admin.product-edit');
            Route::put('/products/{product}/', 'update')->name('admin.products-update');
            Route::delete('/products/{product}/', 'destroy')->name('admin.products-destroy');
        });

        Route::controller(OrderController::class)->group(function (){
            Route::get('/orders', 'index')->name('order.index');
            Route::get('/order/{order}', 'edit')->name('order.edit');
        });

    });
});



Route::controller(CartController::class)->group(function (){
    Route::get('/get-cart', 'getCart');
    Route::get('/cart/empty', 'emptyCart')->name('cart.empty');
    Route::post('/cart/store/{id}', 'addCart')->name('addToCart');
    Route::post('/cart/remove', 'removeItem')->name('remove.item');
    Route::post('/item/increase', 'itemIncrease')->name('item.increase');
    Route::post('/item/decrease', 'itemDecrease')->name('item.decrease');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(CheckoutController::class)->group(function () {
        Route::get('/checkout', 'index')->name('checkout.one');
        Route::post('/checkout', 'store')->name('checkout.store');
        Route::get('/checkout-success', 'success')->name('checkout.success');
    });
});


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
