<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudioController extends Controller
{
    public function studio() {
        $user = Auth::user();
        $data = User::all();
        return view('user.studio', compact('user', 'data'));
    }

}
