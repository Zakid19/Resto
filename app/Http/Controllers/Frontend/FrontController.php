<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    {
        $specials = Category::where('name', 'fast food')->first();
        return view('dashboard', compact('specials'));
    }
}
