<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return response()->json([
            'NIM' => '2341720006',
            'Nama' => 'Wahyu Rizky Cahyana'
        ]);
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
