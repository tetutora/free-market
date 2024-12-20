<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| ここでアプリケーションの web ルートを登録できます。
| これらのルートは、RouteServiceProvider 内の "web" ミドルウェアグループで読み込まれます。
|
*/

// トップページ
Route::get('/', function () {
    return view('products.index');
});
Route::get('/', [ProductController::class, 'index']);

// 新規登録ルート
Route::post('/register', [RegisterController::class, 'register']);

// ログインルート
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// プロフィールページのルート
Route::middleware(['auth'])->get('/mypage', [ProfileController::class, 'show'])->name('mypage');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// プロフィールページ（ログイン済みのみアクセス可能）
Route::middleware(['auth'])->group(function () {
    Route::get('/mypage', [ProfileController::class, 'show'])->name('mypage');
    Route::post('/mypage', [ProfileController::class, 'updateProfile']);
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');



