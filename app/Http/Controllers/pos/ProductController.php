<?php

namespace App\Http\Controllers\pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $id = session('id');
        $name = session('name');
        return view('pos.product')
        ->with('id', $id)
        ->with('name', $name);
    }   
    public function babyKid(){
        return view('pos.product-description')
        ->with('imgUrl', 'https://cdn-icons-png.flaticon.com/512/4836/4836691.png')
        ->with('name', 'Baby & Kid')
        ->with('stars', '4')
        ->with('maxStars', '5')
        ->with('description', 'Produk bayi dan anak mencakup semua kebutuhan esensial untuk perawatan, kenyamanan, dan perkembangan anak-anak, mulai dari popok dan pakaian hingga mainan edukatif dan perlengkapan tidur.');
    }

    public function beautyHealth(){
        return view('pos.product-description')
        ->with('imgUrl', 'https://cdn-icons-png.flaticon.com/512/2637/2637957.png')
        ->with('name', 'Beauty & Health')
        ->with('stars', '3.5')
        ->with('maxStars', '5')
        ->with('description', 'Produk kecantikan dan kesehatan mencakup berbagai item perawatan pribadi, kosmetik, suplemen, dan alat kesehatan yang dirancang untuk meningkatkan penampilan, kebugaran, dan kesejahteraan secara keseluruhan.');
    }

    public function foodBeverage(){
        return view('pos.product-description')
        ->with('imgUrl', 'https://cdn-icons-png.flaticon.com/512/1047/1047244.png')
        ->with('name', 'Food & Beverage')
        ->with('stars', '4.2')
        ->with('maxStars', '5')
        ->with('description', 'Produk makanan dan minuman mencakup berbagai jenis makanan olahan, minuman ringan, makanan ringan, bahan makanan pokok, dan produk minuman lainnya yang dirancang untuk memenuhi kebutuhan nutrisi dan memberikan kenikmatan rasa bagi konsumen.');
    }

    public function homeCare(){
        return view('pos.product-description')
        ->with('imgUrl', 'https://cdn-icons-png.flaticon.com/512/3081/3081829.png')
        ->with('name', 'Home Care')
        ->with('stars', '4.5')
        ->with('maxStars', '5')
        ->with('description', 'Produk perawatan rumah tangga mencakup berbagai barang yang dirancang untuk menjaga kebersihan, kenyamanan, dan fungsionalitas rumah, termasuk deterjen, pembersih, peralatan rumah tangga, dan perlengkapan kebersihan.');
    }
}
