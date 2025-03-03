<?php

use Illuminate\Support\Facades\Route;
use function GuzzleHttp\json_encode;

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

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/hello', function(){
    return 'Hello World';
});

Route::get('/world', function(){
    return 'World';
});

Route::get('/about', function () {
    return response()->json([
        'NIM' => '2341720006',
        'Nama' => 'Wahyu Rizky Cahyana'
    ]);
});
