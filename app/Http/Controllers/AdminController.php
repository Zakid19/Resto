<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');

        // return response()->json([
        //     'message' => 'Admin Dashboard'
        // ]);
    }
}
