<?php

// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PageController;
// use App\Http\Controllers\PhotoController;
// use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\pos\HomeController;
use App\Http\Controllers\pos\ProductController;
use App\Http\Controllers\pos\TransactionController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', [HomeController::class, 'home'])->name('home');

// Route::get('/category', [ProductController::class, 'product'])->name('category');

// Route::get('/category/baby-kid', [ProductController::class, 'babyKid'])->name('babyKid');

// Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth'])->name('beautyHealth');

// Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage'])->name('foodBeverage');

// Route::get('/category/home-care', [ProductController::class, 'homeCare'])->name('homeCare');

// Route::get('/user/{id?}/name/{name?}', [UserController::class, 'user']);

// Route::get('/transaction', [TransactionController::class, 'transaction'])->name('transaction');

// Route::get('/', function(){
//     return view('welcome');
// });

// Route::get('/', [UserController::class, 'index']);
// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
// Route::get('/user/tambah', [UserController::class, 'tambah']);
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
// Route::get('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

Route::pattern('id', '[0-9]+');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'postregister']);

Route::middleware(['auth'])->group(function () {
    Route::get('/', [WelcomeController::class, 'index']);
    Route::get('/poto', [UserController::class, 'poto']);
    Route::post('/poto', [UserController::class, 'change_poto']);

    Route::middleware(['authorize:ADMM'])->group(function () {
        Route::group(['prefix' => 'level'], function () {
            Route::get('/', [LevelController::class, 'index']);
            Route::post('/list', [LevelController::class, 'list']);
            Route::get('/create', [LevelController::class, 'create']);
            Route::post('/', [LevelController::class, 'store']);
            Route::get('/create_ajax', [LevelController::class, 'create_ajax']);
            Route::post('/ajax', [LevelController::class, 'store_ajax']);
            Route::get('/{id}', [LevelController::class, 'show']);
            Route::get('/{id}/edit', [LevelController::class, 'edit']);
            Route::put('/{id}', [LevelController::class, 'update']);
            Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
            Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']);
            Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
            Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
            Route::delete('/{id}', [LevelController::class, 'destroy']);
        });

        Route::group(['prefix' => 'user'], function () {
            Route::get('/', [UserController::class, 'index']);
            Route::post('/list', [UserController::class, 'list']);
            Route::get('/create', [UserController::class, 'create']);
            Route::post('/', [UserController::class, 'store']);
            Route::get('/create_ajax', [UserController::class, 'create_ajax']);
            Route::post('/ajax', [UserController::class, 'store_ajax']);
            Route::get('/{id}', [UserController::class, 'show']);
            Route::get('/{id}/edit', [UserController::class, 'edit']);
            Route::put('/{id}', [UserController::class, 'update']);
            Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);
            Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);
            Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);
            Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']);
            Route::delete('/{id}', [UserController::class, 'destroy']);
        });

        Route::group(['prefix' => 'kategori'], function () {
            Route::get('/', [KategoriController::class, 'index']);
            Route::post('/list', [KategoriController::class, 'list']);
            Route::get('/create', [KategoriController::class, 'create']);
            Route::post('/', [KategoriController::class, 'store']);
            Route::get('/create_ajax', [KategoriController::class, 'create_ajax']);
            Route::post('/ajax', [KategoriController::class, 'store_ajax']);
            Route::get('/{id}', [KategoriController::class, 'show']);
            Route::get('/{id}/edit', [KategoriController::class, 'edit']);
            Route::put('/{id}', [KategoriController::class, 'update']);
            Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
            Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
            Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
            Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
            Route::delete('/{id}', [KategoriController::class, 'destroy']);
        });
    });

    Route::middleware(['authorize:ADMM,MNG'])->group(function () {
        Route::group(['prefix' => 'barang'], function () {
            Route::get('/', [BarangController::class, 'index']);
            Route::post('/list', [BarangController::class, 'list']);
            Route::get('/create', [BarangController::class, 'create']);
            Route::post('/', [BarangController::class, 'store']);
            Route::get('/create_ajax', [BarangController::class, 'create_ajax']);
            Route::post('/ajax', [BarangController::class, 'store_ajax']);
            Route::get('/{id}', [BarangController::class, 'show']);
            Route::get('/{id}/edit', [BarangController::class, 'edit']);
            Route::put('/{id}', [BarangController::class, 'update']);
            Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
            Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);
            Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
            Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
            Route::delete('/{id}', [BarangController::class, 'destroy']);
            Route::get('/import', [BarangController::class, 'import']);
            Route::post('/import_ajax', [BarangController::class, 'import_ajax']);
            Route::get('/export_excel', [BarangController::class, 'export_excel']);
            Route::get('/export_pdf', [BarangController::class, 'export_pdf']);
        });

        Route::group(['prefix' => 'supplier'], function () {
            Route::get('/', [SupplierController::class, 'index']);
            Route::post('/list', [SupplierController::class, 'list']);
            Route::get('/create', [SupplierController::class, 'create']);
            Route::post('/', [SupplierController::class, 'store']);
            Route::get('/create_ajax', [SupplierController::class, 'create_ajax']);
            Route::post('/ajax', [SupplierController::class, 'store_ajax']);
            Route::get('/{id}', [SupplierController::class, 'show']);
            Route::get('/{id}/edit', [SupplierController::class, 'edit']);
            Route::put('/{id}', [SupplierController::class, 'update']);
            Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);
            Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
            Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
            Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);
            Route::delete('/{id}', [SupplierController::class, 'destroy']);
        });
    });
});
