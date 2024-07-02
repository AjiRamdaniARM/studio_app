<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use App\Models\tempatStudio;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class StudioAdminController extends Controller
{
    public function index() {
        $user = Auth::user();
        $data = User::all();
        $studio = tempatStudio::where('id_user',$user->id)->get();
        return view('dashboard.html.studio.index', compact('user', 'data','studio'));
    }

    public function detail (Request $request) {
        $data = new Studio();
        $data->id_studio = $request->studio;
        $data->deskripsi = $request->deskripsi;
        $data->telepone = $request->nomor;
        $data->sosial = $request->instagram;
        $data->alamat = $request->alamat;
        $data2 = tempatStudio::where('id', $request->studio)->first();
        $data->save();

        // Kembalikan response JSON
        return response()->json([
            'success' => 'Data has been added successfully',
            'data' => $data,
            'data2' => $data2
        ]);

        // return redirect()->back()->with('success', 'data detail studio masuk ke database');

    }

    public function create(Request $request)
    {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);

        // Save the data to the database
        $user = Auth::id();
        $studio = new tempatStudio();
        $studio->judul = $request->input('judul');
        $studio->image = $imageName; // Save the image name in the database
        $studio->id_user = $user; // Save the image name in the database
        $studio->maps = $request->input('maps'); // Save the image name in the database
        $studio -> save();
        return redirect()->back()->with('success', 'Data has been added successfully');
    }

    public function delete($id) {
        $studio = tempatStudio::findOrFail($id);
        $imagePath = public_path('assets/img/' . $studio->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $studio->delete();
        return redirect()->back()->with('success', 'Studio deleted successfully');
    }

    function editStudio(Request $request, $id) {
            $tableData = tempatStudio::findOrFail($id);
            // Handle file upload
                $image = $request->file('file');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/img'), $imageName);

            $tableData->judul = $request->input('judul');
            $tableData->image = $imageName;

            $tableData->save();

        return redirect()->back()->with('success', 'Data updated successfully!');
    }
}
