<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Gallery;

class DashboardController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $user = auth()->user();

        if ($user && $user->hasRole('admin')) {
            return redirect()->route('admin.dashboard.index');
        }

        $galleries = Gallery::all();
        $feedbacks = Feedback::all();
        $types = Gallery::distinct()->pluck('type');

        return view('user.dashboard.index', compact('feedbacks', 'galleries', 'types'));
    }

    public function store(Request $request)
    {
        dd($request->all());

        $this->validate($request, [
            'name'    => 'required',
            'email'        => 'required|email|unique:feedback,email',
            'subject'       => 'required|max:255',
            'message' => 'required|max:255',
        ]);

        // dd($request->all());

        $feedback = Feedback::create([
            'user_id'     => auth()->user()->id,
            'name'     => $request->input('name'),
            'email'    => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ]);

        if ($feedback) {
            //redirect dengan pesan sukses
            return redirect()->route('user.dashboard.index')->with(['success' => 'Feddback Berhasil Dikirim!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('user.dashboard.index')->with(['error' => 'Feedback Gagal Dikirim!']);
        }
    }
}
