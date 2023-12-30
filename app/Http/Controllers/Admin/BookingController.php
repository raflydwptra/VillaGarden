<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::latest()->when(request()->q, function ($bookings) {
            $bookings = $bookings->where('title', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.booking.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.booking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required|email|unique:bookings',
            'people' => 'required',
            'phone_number' => 'required|numeric|min:10|unique:bookings',
            'check_in' => 'required',
            'check_out' => 'required'
        ]);

        $booking = Booking::create([
            'user_id'      => auth()->user()->id,
            'full_name'    => $request->input('full_name'),
            'email'        => $request->input('email'),
            'people'       => $request->input('people'),
            'phone_number' => $request->input('phone_number'),
            'check_in'     => $request->input('check_in'),
            'check_out'    => $request->input('check_out')
        ]);

        if ($booking) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.booking.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.booking.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('admin.booking.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required|email',
            'people' => 'required',
            'phone_number' => 'required|numeric|min:10',
            'check_in' => 'required',
            'check_out' => 'required'
        ]);

        $booking = Booking::findOrFail($booking->id);
        $booking->update([
            'user_id'      => auth()->user()->id,
            'full_name'    => $request->input('full_name'),
            'email'        => $request->input('email'),
            'people'       => $request->input('people'),
            'phone_number' => $request->input('phone_number'),
            'check_in'     => $request->input('check_in'),
            'check_out'    => $request->input('check_out')
        ]);

        if ($booking) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.booking.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.booking.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        if ($booking) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
