<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

        if ($user && $user->hasRole('user')) {
            return redirect()->route('user.dashboard.index');
        }

        return view('admin.dashboard.index');
    }
}
