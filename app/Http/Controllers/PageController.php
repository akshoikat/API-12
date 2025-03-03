<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminData;

class PageController extends Controller
{
    public function showPage($admin_id, $poster_id)
    {
        // Query the database to get the relevant data based on admin_id and poster_id
        $data = AdminData::where('admin_id', $admin_id)
                         ->where('poster_id', $poster_id)
                         ->first();

        // Check if data exists
        if (!$data) {
            return abort(404, 'Data not found');
        }

        // Pass the data to the view
        return view('page', compact('data'));
    }


    // public function showPage($admin_id, $poster_id)
    // {
       
    //     $apiUrl = "https://megaback-c4jx.vercel.app/admin/{$admin_id}/{$poster_id}";

        
    //     $response = Http::get($apiUrl);

        
    //     if ($response->failed()) {
    //         return abort(404, 'Data not found from API');
    //     }

       
    //     $data = $response->json();

       
    //     return view('page', compact('data'));
    // }
}
