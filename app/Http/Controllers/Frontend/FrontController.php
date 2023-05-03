<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome()
    {
        $burgers = Category::where('name', 'burgers')->first();
        $deserts = Category::where('name', 'deserts')->first();
        $menus = Menu::all();
        $categories = Category::all();

        return view('dashboard', [
            'burgers' => $burgers,
            'deserts' => $deserts,
            'menus' => $menus,
            'categories' => $categories
        ]);
    }
}
