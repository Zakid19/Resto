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
}
