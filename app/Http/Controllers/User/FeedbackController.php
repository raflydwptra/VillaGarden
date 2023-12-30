<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $feedbacks = Feedback::all();

        return view('user.dashboard.index', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required',
            'email'        => 'required|email|unique:feedback,email',
            'subject'       => 'required|max:255',
            'message' => 'required|max:255',
        ]);

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
