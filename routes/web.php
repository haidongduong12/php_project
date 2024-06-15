<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

// Route::get('/', function () {
//     return view('layouts.app');
// });
Route::get('/', [ProductController::class, 'show'])->name('trangchu');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::middleware(['auth', 'CheckUserRoleMiddleware'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard/index');
//     })->name('dashboard');
// });

// Route::get('/', [ProductController::class, 'show']);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/productDetails/{id}', [ProductController::class, 'showDetails'])->name('productDetails');
    Route::get('/search', [ProductController::class, 'search'])->name('search');
});


//Client Controller
Route::group(['middleware' => 'auth'], function () {
    Route::get('cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('cart', [CartController::class, 'store'])->name('cart.store');
    Route::post('cart/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
});




Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', [HomeController::class, 'index'])->name('profile');
    Route::get('/profile/show', [HomeController::class, 'showProfile'])->name('profile.show');
    Route::post('/profile/update', [HomeController::class, 'updateProfile'])->name('profile.update');
    Route::get('/changepassword/show', [HomeController::class, 'showchangePassword'])->name('changepassword.show');
    Route::post('/changepassword/update', [HomeController::class, 'updatePassword'])->name('changepassword.update');
    Route::get('/profile/historyOrder', [HomeController::class, 'showHistoryOrder'])->name('profile.historyOrder');
    Route::get('/profile/historyOrder/orderItems/{id}', [HomeController::class, 'showItemsOrder'])->name('profile.showItemsOrder');
});

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
//     Route::post('/checkout/add', [OrderController::class, 'store'])->name('order.store');
// });
Route::prefix('checkout')->group(function () {
    Route::get('/', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/add', [OrderController::class, 'store'])->name('order.store');
});


Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::get('/searchDashProduct', [ProductController::class, 'searchDashProduct'])->name('searchDashProduct');
    Route::resource('users', UserController::class);
    Route::get('/searchDashUser', [UserController::class, 'searchDashUser'])->name('searchDashUser');
    Route::resource('categories', CategoryController::class);
    Route::get('/searchDashCate', [CategoryController::class, 'searchDashCate'])->name('searchDashCate');
    Route::resource('brands', BrandsController::class);
    Route::resource('orders', OrderController::class);
    Route::get('/showOrderItem/{id}', [OrderController::class, 'showItemsOrder'])->name('orders.showItemsOrder');
    Route::get('/orderInfo', [OrderController::class, 'orderInfo'])->name('orders.info');
});

//Comments
Route::group(['middleware' => 'auth'], function () {
    Route::post('/comments/add', [CommentController::class, 'store'])->name('comment.add');
    Route::get('/comments/dashboard/show', [CommentController::class, 'show'])->name('comment.showDash');
    Route::resource('comments', CommentController::class);
});
