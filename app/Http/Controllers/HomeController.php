<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Gallery;

class HomeController extends Controller
{
    use HasRoles;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();

        if ($user && $user->hasRole('user')) {
            return redirect()->route('user.dashboard.index');
        } elseif ($user && $user->hasRole('admin')) {
            return redirect()->route('admin.dashboard.index');
        }

        $galleries = Gallery::all();
        $feedbacks = Feedback::all();
        $types = Gallery::distinct()->pluck('type');

        return view('home', compact('feedbacks', 'galleries', 'types'));
    }
}
