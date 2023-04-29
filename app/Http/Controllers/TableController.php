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
}
