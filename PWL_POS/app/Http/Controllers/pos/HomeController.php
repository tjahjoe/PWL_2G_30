<?php

namespace App\Http\Controllers\pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $id = session('id');
        $name = session('name');
        
        return view('pos.home')
        ->with('id', $id)
        ->with('name', $name);
    }
}
