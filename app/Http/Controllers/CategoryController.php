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

    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request)
    {
        $imageCategory =  $request->file('image')->store('public/images/categories');

        $category = Category::create([
            'name' => request('name'),
            'description' => request('description'),
            'image' => $imageCategory
        ]);

        // return redirect('admin/category');

        return Response::json(['succes' => 'true', 'message' => 'Created Category Succesfully!', 'created_data' => new CategoryResource($category)], 200);

    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {

        $imageCategory = $category->image;

        if ($request->hasFile('image')) {
            Storage::delete($category->image);
            $imageCategory = $request->file('image')->store('public/images/categories');
        }
        $category->update([
            'name' => request('name'),
            'description' => request('description'),
            'image' => $imageCategory,
        ]);

        // return redirect('admin/category');

        return Response::json(['succes' => 'true', 'message' => 'Updated Catgeory Succesfully!', 'updated_data' => new CategoryResource($category)], 200);
    }

    public function destroy(Category $category)
    {
        Storage::delete($category->image);
        $category->delete();

        return Response::json(['succes' => 'true', 'message' => 'Updated Catgeory Succesfully!', 'updated_data' => $category->name], 200);
    }
}
