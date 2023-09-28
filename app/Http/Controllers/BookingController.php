<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function pesanTiket($bus_id)
    {
        $booking = new Booking();
        $booking->bus_id = $bus_id;
        $booking->user_id = Auth::user()->id;
        $booking->save();
        return redirect('/')->with('success', 'Tiket berhasil dipesan');
    }

    public function showTiket()
    {
        $booking = Booking::where('user_id', Auth::user()->id)->get();
        return view('tiketPage', ['booking' => $booking]);
    }
}
