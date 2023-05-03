<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\Table;
use App\Rules\DateResto;
use App\Rules\TimeResto;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function stepOne(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $min_date = Carbon::today();
        $max_date = Carbon::now()->addWeek();

        return view('frontend.reservation.step-one', compact('reservation', 'min_date', 'max_date'));
    }

    public function storeStepOne(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'no_tlp' => 'required',
            'guest_number' => 'required',
            'res_date' => ['required', 'date', new DateResto, new TimeResto]
        ]);

        // Jika kosong maka tambahkan rservasi new dengan fill berikut
        if (empty($request->session()->get('reservation'))) {
            $reservation = new Reservation();
            $reservation->fill($validasi);
            $request->session()->put('reservation', $reservation);

        } else {
            // Jika tidak kosong
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validasi);
            $request->session()->put('reservation', $reservation);
        }

        return redirect('reservation/step-two');
    }

    public function stepTwo(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $res_date_table = Reservation::orderBy('res_date')->get()->filter(function ($value) use ($reservation) {
            return $value->res_date->format('Y-m-d') == $reservation->res_date->format('Y-m-d');
        })->pluck('table_id');

        $tables = Table::where('status', TableStatus::Available)
        // Tampilkan table yang sesuai jumlah guest atau table table lebih
                ->where('guest_number', '>=', $reservation->guest_number)

        // Dan Jangan tampilkan table yang telah dipesan di tanggal itu
                ->whereNotIn('id', $res_date_table)
                ->get();

        return view('frontend.reservation.step-two', compact('tables'));
    }

    public function storeStepTwo(Request $request)
    {
        $validasi = $request->validate([
            'table_id' => 'required'
        ]);

        $reservation = $request->session()->get('reservation');
        $reservation->fill($validasi);
        $reservation->save();

        $request->session()->forget('reservation');

        return back()->with('succes', 'Terima kasih, pesanan anda sedang kami proses');
    }
}
