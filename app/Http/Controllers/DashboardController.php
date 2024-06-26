<?php

namespace App\Http\Controllers;

use App\Models\tempatStudio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index () {
        $user = Auth::user();
        $userCount = User::all()->count();
        $data = User::all();
        $studio = tempatStudio::all();
        return view('dashboard.html.dashboard', compact('user','data','studio','userCount'));
    }
}
