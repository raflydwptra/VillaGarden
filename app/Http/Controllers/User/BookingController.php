<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Feedback;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.booking.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'full_name'    => 'required',
            'email'        => 'required|email|unique:bookings,email', // Unique validation syntax added
            'people'       => 'required',
            'phone_number' => 'required|unique:bookings,phone_number', // Unique validation syntax added
            'check_in'     => 'required|date',
            'check_out'    => 'required|date|after:check_in', // Ensure check_out is after check_in
        ]);

        // dd($request->all());

        $booking = Booking::create([
            'user_id'     => auth()->user()->id,
            'full_name'     => $request->input('full_name'),
            'email'    => $request->input('email'),
            'people' => $request->input('people'),
            'phone_number' => $request->input('phone_number'),
            'check_in'     => $request->input('check_in'),
            'check_out'    => $request->input('check_out')
        ]);

        if ($booking) {
            //redirect dengan pesan sukses
            return redirect()->route('user.dashboard.index')->with(['success' => 'Pemesanan Berhasil!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('user.booking.index')->with(['error' => 'Pemesanan Gagal!']);
        }
    }
}
