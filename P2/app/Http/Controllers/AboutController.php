<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return response()->json([
            'NIM' => '2341720006',
            'Nama' => 'Wahyu Rizky Cahyana'
        ]);
    }
}
