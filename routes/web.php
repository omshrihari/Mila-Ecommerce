<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FiveBannerController;
use App\Http\Controllers\Admin\ForthBannerController;
use App\Http\Controllers\Admin\MainBannerController;
use App\Http\Controllers\Admin\OrderManageController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SecondLevelBannerController;
use App\Http\Controllers\Admin\SixBannerController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\SubsubCategoryController;
use App\Http\Controllers\Admin\ThirdBannerController;
use App\Http\Controllers\Admin\YtController;
use App\Http\Controllers\Basic\HomeController;
use App\Http\Controllers\Basic\OrderController;
use App\Models\SecondLevelBanner;
use App\Models\SixLevelBanner;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

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


//default routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cart', [HomeController::class, 'showCart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'showCheckout'])->name('checkout');
Route::get('/c/{slug}', [HomeController::class, 'categorypage'])->name('categorypage');
Route::get('/s/{slug}', [HomeController::class, 'subcategorypage'])->name('subcategorypage');
Route::get('/product/{slug}', [HomeController::class, 'productDetail'])->name('productdetail');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/page/{slug}', [HomeController::class, 'page'])->name('page');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/order', [OrderController::class, 'order'])->name('order');
Route::get('/phonepe', [OrderController::class, 'phonePe'])->name('phonepe');
Route::any('/phonepe-response', [OrderController::class, 'response'])->name('response');




// Admin authentication routes
Route::get('/milachinLogin', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'authenticate'])->name('admin.login.post');

// Admin routes with admin middleware
Route::middleware(['admin'])->prefix('admin')->group(function () {

    Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');

    // Main banner routes
    Route::resource('banner/mainbanner', MainBannerController::class)->names('admin.mainbanner');

    //category routes
    Route::resource('category', CategoryController::class)->names('admin.category');

    //subcategory routes
    Route::resource('subcategory', SubcategoryController::class)->names('admin.subcategory');

    //subsubcategory routes
    Route::resource('subsubcategory', SubsubCategoryController::class)->names('admin.subsubcategory');

    //product routes
    Route::resource('product', ProductController::class)->names('admin.product');

    //yt routes
    Route::resource('youtube', YtController::class)->names('admin.yt');

    //Second Level Banner routes
    Route::resource('secondlevelbanner', SecondLevelBannerController::class)->names('admin.secondlevelbanner');

    //Third Level Banner routes
    Route::resource('thirdlevelbanner', ThirdBannerController::class)->names('admin.thirdlevelbanner');

    //Forth Level Banner routes
    Route::resource('forthlevelbanner', ForthBannerController::class)->names('admin.forthlevelbanner');

    //Fifth Level Banner routes
    Route::resource('fivelevelbanner', FiveBannerController::class)->names('admin.fivelevelbanner');

    //Sixth Level Banner routes
    Route::resource('sixlevelbanner', SixBannerController::class)->names('admin.sixlevelbanner');

    //Pages routes
    Route::resource('page', PagesController::class)->names('admin.page');

    //Pages routes
    Route::resource('order', OrderManageController::class)->names('admin.order');
});