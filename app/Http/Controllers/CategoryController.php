<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
        // return CategoryResource::collection($categories);
    }
}
