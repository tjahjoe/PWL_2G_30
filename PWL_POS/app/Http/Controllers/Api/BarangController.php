<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BarangModel;
use Illuminate\Http\Request;
use Validator;

class BarangController extends Controller
{
    public function index()
    {
        return BarangModel::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'kategori_id' => 'required',
            'barang_kode' => 'required',
            'barang_nama' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('posts', 'public');
            $filename = basename($path);
        } else {
            return response()->json(['error' => 'Image file not uploaded'], 400);
        }
        
        $barang = BarangModel::create([
            'kategori_id' => $request->kategori_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'image' => $filename
        ]);

        if ($barang) {
            return response()->json([
                'success' => true,
                'barang' => $barang
            ], 201);
        }

        return response()->json([
            'success' => false
        ], 201);
    }

    public function show(BarangModel $barang)
    {
        return response()->json($barang);
    }


    public function update(Request $request, BarangModel $barang){
        $barang->update($request->all());
        return response()->json($barang);
    }

    public function destroy(BarangModel $barang){
        $barang->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data terhapus'
        ]);
    }
}
