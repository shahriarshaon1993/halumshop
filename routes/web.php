<?php

use App\Http\Controllers\Backend\Auth\AdminLoginController;
use App\Http\Controllers\Backend\Auth\AdminLogoutController;
use App\Http\Controllers\Backend\Auth\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NewslaterController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\PostCategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SeoController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\Auth\ChangePasswordController;
use App\Http\Controllers\Frontend\Auth\Password\ForgotPasswordController;
use App\Http\Controllers\Frontend\Auth\UserAuthController;
use App\Http\Controllers\Frontend\Auth\UserLogoutController;
use App\Http\Controllers\Frontend\Auth\UserProfileController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\FrontNewslaterController;
use App\Http\Controllers\Frontend\FrontPostController;
use App\Http\Controllers\Frontend\FrontProductController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\WishlistController;
use Gloudemans\Shoppingcart\Facades\Cart;
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

    // Admin order route
    Route::get('/orders/pandding', [OrderController::class, 'orderPandding'])->name('orders.pandding');
    Route::get('/order/view/{id}', [OrderController::class, 'viewOrder'])->name('order.view');
    Route::put('/order/accept/{id}', [OrderController::class, 'orderAccept'])->name('order.accept');
    Route::put('/order/cancel/{id}', [OrderController::class, 'orderCancel'])->name('order.cancel');
    Route::get('/orders/accept/payment', [OrderController::class, 'acceptPayment'])->name('accept.payment');
    Route::put('/orders/proccess/payment/{id}', [OrderController::class, 'proccessPayment'])->name('proccess.payment');
    Route::get('/orders/proccess/delivery', [OrderController::class, 'proccessDelivery'])->name('proccess.delivery');
    Route::put('/orders/delivery/done/{id}', [OrderController::class, 'deliveryDone'])->name('delivery.done');
    Route::get('/orders/deleverd/list', [OrderController::class, 'deleverd'])->name('order.deleverd');
    Route::get('/orders/cancel/list', [OrderController::class, 'cancelList'])->name('order.cancel.list');

    // SEO Setting
    Route::resource('seos', SeoController::class)->only([
        'index', 'update'
    ]);
});

// User Logn & Ragistration
Route::get('/login', [UserAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserAuthController::class, 'proccessLogin']);
Route::get('/register', [UserAuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserAuthController::class, 'proccessRegister']);
Route::get('/activate/{token}', [UserAuthController::class, 'activate'])->name('activate');
Route::post('/logout', [UserLogoutController::class, 'logout'])->name('logout');

// Forget Password
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// User Profile Controller
Route::get('/profile/{slug}', [UserProfileController::class, 'index'])->name('profile');
Route::get('/profile/{slug}/orders', [UserProfileController::class, 'profileOrder'])->name('profile.order');
Route::get('/user/change-password', [ChangePasswordController::class, 'index'])->name('password.change');
Route::post('/user/change-password', [ChangePasswordController::class, 'changePassword']);

// Home Controller for home page route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Store Newsletter
Route::post('/newsletter/store', [FrontNewslaterController::class, 'store'])->name('newsletter.store');

// Products Route
Route::prefix('products')->group(function () {

    // Add Wishlist
    Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
    Route::post('/wishlist/add', [WishlistController::class, 'storeWishlist'])->name('add.wishlist');
    Route::delete('/remove/wishlist/{id}', [WishlistController::class, 'removeWishlist'])->name('remove.wishlist');

    // Add To Cart
    Route::get('/show/cart', [CartController::class, 'showCart'])->name('show.cart');
    Route::post('/update/cart/item', [CartController::class, 'updateCartItem'])->name('update.cartitem');
    Route::delete('/remove/cart/{rowId}', [CartController::class, 'removeCart'])->name('remove.cart');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::post('/apply/coupon', [CartController::class, 'storeCoupon'])->name('apply.coupon');

    // Products
    Route::get('/details/{slug}', [FrontProductController::class, 'productView'])->name('products.details');
    Route::post('/details/{slug}', [FrontProductController::class, 'addProductCart']);
    Route::get('/queck/{slug}', [FrontProductController::class, 'productQueckView'])->name('products.queck');
    Route::get('/categories/{slug}', [FrontProductController::class, 'category'])->name('products.categories');
    Route::get('/products-all', [FrontProductController::class, 'products'])->name('products');
    Route::get('/hotdeals', [FrontProductController::class, 'hotDeal'])->name('products.hotdeal');
    Route::get('/bestseller', [FrontProductController::class, 'bestSeller'])->name('products.bestseller');
    Route::get('/specialoffer', [FrontProductController::class, 'specialOffer'])->name('products.specialoffer');
    Route::get('/trand', [FrontProductController::class, 'trand'])->name('products.trand');
    Route::get('/newarrival', [FrontProductController::class, 'newArrival'])->name('products.newarrival');

    // Payment system
    Route::post('/payment/proccess', [PaymentController::class, 'payment'])->name('payment.proccess');
    Route::post('/payment/stripe', [PaymentController::class, 'stripe'])->name('payment.stripe');
});

// Blogs route
Route::prefix('blogs')->group(function () {

    Route::get('/posts', [FrontPostController::class, 'postIndex'])->name('blog.posts');
    Route::get('/lan/english', [FrontPostController::class, 'english'])->name('lng.english');
    Route::get('/lan/bangla', [FrontPostController::class, 'bangla'])->name('lng.bangla');
    Route::get('/single/{slug}', [FrontPostController::class, 'singlePost'])->name('blog.single');
});

Route::fallback(function () {
    return '404 NOT FOUND';
});

// ---- For Checking Route ----

Route::get('/check/cart', function () {
    // Cart::destroy();
    // return response()->json(Cart::content());
    dd(Cart::content());
});

Route::get('test', function () {
    return App\Models\Category::with('parent_category')->whereNotNull('category_id')->where('id', 6)->get();
});
