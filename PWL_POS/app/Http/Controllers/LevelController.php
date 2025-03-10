<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;
use function PHPUnit\Framework\returnArgument;

class LevelController extends Controller
{
    public function index(){
        // DB::insert('insert into m_level(level_kode, 
        // level_nama, created_at) values (?, ?, ?)', ['CUS', 'Pelanggan', now()]);
        // return 'insert data baru berhasil';

        // $row = DB::insert('update m_level set level_nama = ? where level_kode = ?', 
        // ['Customer', 'CUS']);
        // return 'update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

        // $row = DB::delete('delete from m_level where level_kode = ?',
        // ['CUS']);
        // return 'Delete data berhasil. Jumlah dayang dihapus: ' . $row . ' baris';
        
        $data = DB::select('select * from m_level');
        return view('level', ['data' => $data]);
    }
}