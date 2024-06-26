<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileViewController extends Controller
{
    public function index () {
        $user = Auth::user();
        return view('dashboard.html.profile.index', compact('user'));
    }
    public function editProfile(Request $request) {
        $userId = Auth::id(); // Assuming it's the authenticated user
        // OR
        // $userId = $request->input('user_id'); // If editing another user based on ID

        $user = User::find($userId);

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'User not found!']);
        }

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,' . $user->id, // Exclude current user ID
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
