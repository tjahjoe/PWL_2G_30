<?php

namespace App\Http\Controllers\pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
  
    public function user($id='1', $name='Wahyu'){

        session(['id' => $id, 'name' => $name]);
        
        return view('pos.user')
        ->with('id', $id)
        ->with('name', $name);
    }
}
