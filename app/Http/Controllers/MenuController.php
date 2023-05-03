<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Http\Resources\MenuResource;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', compact('menus'));
        // return MenuResource::collection($menus);
    }

    public function show(Menu $menu)
    {
        return new MenuResource($menu);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.menu.create', compact('categories'));
    }

    public function store(MenuRequest $request)
    {
        $menuImage = $request->file('image')->store('public/images/menus');

        $menu = Menu::create([
            'name' => request('name'),
            'description' => request('description'),
            'price' => request('price'),
            'image' => $menuImage,
        ]);

        $menu->categories()->attach($request->categories);

        return Response::json(['succes' => 'true', 'messages' => 'Created Menu Succesfully!', 'created_data' => new MenuResource($menu)]);
    }

    public function edit(Menu $menu)
    {
        return view('admin.menu.edit', [
            'categories' => Category::all(),
            'menu' => $menu
        ]);
    }

    public function update(MenuRequest $request, Menu $menu)
    {
        $menuImage = $menu->image;

        // Jika ada permintaan lagi image
        if ($request->hasFile('image')) {
            Storage::delete($menu->image);
            $request->file('image')->store('public/images/menus');
        }

        $menu->update([
            'name' => request('name'),
            'description' => request('description'),
            'price' => request('price'),
            'image' => $menuImage
        ]);

        // Jika ada permintaan category lainnya
        if ($request->categories) {
            $menu->categories()->sync($request->categories);
        }

        // return redirect('admin/menu');

        return Response::json(['succes' => 'true', 'message' => 'Updated Menu Succesfully!', 'updated_data' => new MenuResource($menu)], 200);
    }

    public function destroy(Menu $menu)
    {
        Storage::delete($menu->image);
        $menu->categories()->detach();
        $menu->delete();

        // return back();

        return Response::json(['succes' => 'true', 'message' => 'Updated Menu Succesfully!', 'deleted_data' => $menu->name ], 200);

    }
}
