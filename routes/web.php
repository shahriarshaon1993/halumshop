<?php

use App\Http\Controllers\Backend\Auth\AdminLoginController;
use App\Http\Controllers\Backend\Auth\AdminLogoutController;
use App\Http\Controllers\Backend\Auth\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NewslaterController;
use App\Http\Controllers\Backend\PostCategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\Auth\ChangePasswordController;
use App\Http\Controllers\Frontend\Auth\UserAuthController;
use App\Http\Controllers\Frontend\Auth\UserLogoutController;
use App\Http\Controllers\Frontend\Auth\UserProfileController;
use App\Http\Controllers\Frontend\FrontNewslaterController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

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

// Admin Routes

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'proccessLogin']);
    Route::post('/logout', [AdminLogoutController::class, 'proccessLogout'])->name('admin.logout');

    Route::get('/change/password', [AdminProfileController::class, 'index'])->name('change.password');
    Route::post('/change/password', [AdminProfileController::class, 'changePassword']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Categories
    Route::resource('categories', CategoryController::class)->except([
        'create', 'show'
    ]);

    // Brands
    Route::resource('brands', BrandController::class)->except([
        'create', 'show'
    ]);

    // Coupons
    Route::resource('coupons', CouponController::class)->only([
        'index', 'store', 'destroy'
    ]);

    // Newslaters
    Route::resource('newslaters', NewslaterController::class)->only([
        'index', 'store', 'destroy'
    ]);

    // Products
    Route::post('products/inactive/{id}', [ProductController::class, 'inactive'])->name('inactive.store');
    Route::post('products/active/{id}', [ProductController::class, 'active'])->name('active.store');
    Route::get('get/subcategory/{category_id}', [ProductController::class, 'getSubCategory']);
    Route::resource('products', ProductController::class);

    // Post Categories
    Route::resource('post-categories', PostCategoryController::class)->except([
        'create', 'show'
    ]);

    // Posts
    Route::post('posts/inactive/{id}', [PostController::class, 'inactive'])->name('posts.inactive.store');
    Route::post('posts/active/{id}', [PostController::class, 'active'])->name('posts.active.store');
    Route::resource('posts', PostController::class);

    // Sliders
    Route::post('sliders/inactive/{id}', [SliderController::class, 'inactive'])->name('sliders.inactive.store');
    Route::post('sliders/active/{id}', [SliderController::class, 'active'])->name('sliders.active.store');
    Route::resource('sliders', SliderController::class);
});

// User Logn & Ragistration
Route::get('/login', [UserAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserAuthController::class, 'proccessLogin']);
Route::get('/register', [UserAuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserAuthController::class, 'proccessRegister']);
Route::get('/activate/{token}', [UserAuthController::class, 'activate'])->name('activate');
Route::post('/logout', [UserLogoutController::class, 'logout'])->name('logout');

// Home Controller for home page route
Route::get('/', [HomeController::class, 'index'])->name('home');

// User Profile Controller
Route::get('/profile/{slug}', [UserProfileController::class, 'index'])->name('profile');
Route::get('/user/change-password', [ChangePasswordController::class, 'index'])->name('password.change');
Route::post('/user/change-password', [ChangePasswordController::class, 'changePassword']);

// Newsletter
Route::post('/newsletter/store', [FrontNewslaterController::class, 'store'])->name('newsletter.store');

Route::fallback(function () {
    return '404 NOT FOUND';
});

Route::get('test', function () {
    return App\Models\Category::with('parent_category')->whereNotNull('category_id')->where('id', 6)->get();
});
