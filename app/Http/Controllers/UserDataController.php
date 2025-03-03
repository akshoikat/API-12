<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class UserDataController extends Controller
{
    public function storeLoginData(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        UserLogin::create([
            'user_id'   => auth()->id() ?? null,
            'email'     => $request->email,
            'password'  => Hash::make($request->password), // Hash password
            'device'    => $request->header('User-Agent'), // Capture device info
            'ip_address' => $request->ip(), // Capture IP address
        ]);
    
        return response()->json(['message' => 'Login data stored successfully']);
    }
}
