<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Validator;

class RegisterController extends Controller
{
    public function __invoke(Request $request){
        $validator = Validator::make($request->all(),[
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required|min:5|confirmed',
            'level_id' => 'required',
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
        
        $user = UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'level_id' => $request->level_id,
            'image' => $filename, 
        ]);

        if ($user) {
            return response()->json([
                'success' => true,
                'user' => $user
            ], 201);
        }

        return response()->json([
            'success' => false
        ], 201);
    }
}
