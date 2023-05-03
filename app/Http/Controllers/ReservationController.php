<?php

namespace App\Http\Controllers;

use App\Enums\TableStatus;
use App\Http\Requests\ReservationRequest;
use App\Http\Resources\ReservationResource;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservation.index', compact('reservations'));
        // return ReservationResource::collection($reservations);
    }

    public function show(Reservation $reservation)
    {
        return new ReservationResource($reservation);
    }

    public function create()
    {
        $tables = Table::where('status', TableStatus::Available)->get();
        return view('admin.reservation.create', compact('tables'));
    }

    public function store(ReservationRequest $request)
    {
        $table = Table::findOrFail($request->table_id);

        // Jika permintaan jumlah guest lebih dengan kapasitas (guest table)
        if ($request->guest_number > $table->guest_number) {
            return back()->with('warning', 'Mohon untuk memilih meja yang sesuai jumlah tamu anda');
        }

        $reservation = Reservation::create([
            'table_id' => request('table_id'),
            'name' => request('name'),
            'email' => request('email'),
            'no_tlp' => request('no_tlp'),
            'res_date' => request('res_date'),
            'guest_number' => request('guest_number')
        ]);

        return Response::json(['succes' => 'true', 'message' => 'Created Reservation Succesfully!', 'created_data' => new ReservationResource($reservation)], 200);
    }

    public function edit(Reservation $reservation)
    {
        $tables = Table::where('status', TableStatus::Available)->get();

        return view('admin.reservation.edit', compact('reservation', 'tables'));
    }

    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $reservation->update([
            'table_id' => request('table_id'),
            'name' => request('name'),
            'email' => request('email'),
            'no_tlp' => request('no_tlp'),
            'guest_number' => request('guest_number'),
        ]);

        return Response::json(['succes' => 'true', 'message' => 'Updated Reservation Succesfully!', 'updated_data' => new ReservationResource($reservation)], 200);
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        // return back();

        return Response::json(['succes' => 'true', 'message' => 'Deleted Reservation Succesfully!', 'deleted_data' => $reservation->name], 200);
    }
}
