<?php

// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PageController;
// use App\Http\Controllers\PhotoController;
// use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\pos\HomeController;
use App\Http\Controllers\pos\ProductController;
use App\Http\Controllers\pos\TransactionController;
use App\Http\Controllers\pos\UserController;
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

// Route::get('/hello', [WelcomeController::class, 'hello']);

// Route::get('/world', function(){
//     return 'World';
// });

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Route::get('/user/{name?}', function($name='Jhon'){
//     return 'Nama saya ' . $name;
// });

// Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
//     return 'Pos ke-'. $postId . 'Komentar ke-' . $commentId;
// });

// Route::resource('photos', PhotoController::class);

// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);

// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);

// Route::get('/greeting',[WelcomeController::class, 'greeting']);

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/category', [ProductController::class, 'product'])->name('category');

Route::get('/category/baby-kid', [ProductController::class, 'babyKid'])->name('babyKid');

Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth'])->name('beautyHealth');

Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage'])->name('foodBeverage');

Route::get('/category/home-care', [ProductController::class, 'homeCare'])->name('homeCare');

Route::get('/user/{id?}/name/{name?}', [UserController::class, 'user']);

Route::get('/transaction', [TransactionController::class, 'transaction'])->name('transaction');