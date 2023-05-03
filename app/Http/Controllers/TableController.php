<?php

namespace App\Http\Controllers;

use App\Http\Requests\TableRequest;
use App\Http\Resources\TableResource;
use App\Models\Table;
use Facade\Ignition\Tabs\Tab;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $tables =  Table::all();
        return view('admin.table.index', compact('tables'));
        // return TableResource::collection($tables);
    }

    public function show(Table $table)
    {
        return new TableResource($table);
    }

    public function create()
    {
        return view('admin.table.create');
    }

    public function store(TableRequest $request)
    {
        $table = Table::create([
            'name' => request('name'),
            'guest_number' => request('guest_number'),
            'location' => request('location'),
            'status' => request('status')
        ]);

        return Response::json(['succes' => 'true', 'message' => 'Created Table Succesfully!', 'created_data' => new TableResource($table)], 200);
    }

    public function edit(Table $table)
    {
        return view('admin.table.edit', compact('table'));
    }

    public function update(TableRequest $request, Table $table)
    {
        $table->update([
            'name' => request('name'),
            'guest_number' => request('guest_number'),
            'location' => request('location'),
            'status' => request('status'),
        ]);

        return Response::json(['succes' => 'true', 'message' => 'Updated Table Succesfully!', 'updated_data' => new TableResource($table)], 200);
    }

    public function destroy(Table $table)
    {
        $table->delete();

        return back();

        return Response::json(['succes' => 'true', 'message' => 'Deleted Table Succesfully!', 'deleted_data' => $table->name], 200);
    }
}
