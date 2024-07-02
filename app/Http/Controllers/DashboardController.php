<?php

namespace App\Http\Controllers;

use App\Models\ImageProduks;
use App\Models\Produks;
use App\Models\tempatStudio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index () {
        $user = Auth::user();
        $userCount = User::all()->count();
        $data = User::all();
        $studio = tempatStudio::all();
        return view('dashboard.html.dashboard', compact('user','data','studio','userCount'));
    }

    public function manageUser() {
        $user = Auth::user();
        $userCount = User::all()->count();
        $data = User::all();
        $studio = tempatStudio::all();
        $user2 = User::all();
        $roles = ['admin', 'user', 'superadmin']; // Sesuaikan dengan role yang Anda miliki
        return view('dashboard.manageUser.index', compact('user','user2','data','studio','userCount','roles'));
    }

    public function deleteUser($id) {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully');
    }

    public function editUser(Request $request,$id) {
        $user = User::findOrFail($id);
        $user->fill([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
        ]);
        $user->save();

        return redirect()->back()->with('success', 'edit data user berhasil!!');
    }

    public function addUser(Request $request) {
        // Membuat instance User baru
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'User added successfully.');
    }

    public function imageProduks ($id) {
         $user = Auth::user();
         $produk = Produks::where('id', $id)->first();
         $image = ImageProduks::where('id_produk', $id)->get();
         return view('dashboard.html.image_produks.index' , compact('user','produk','image')  );
    }

}
