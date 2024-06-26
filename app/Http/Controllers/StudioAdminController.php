<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use App\Models\tempatStudio;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudioAdminController extends Controller
{
    public function index() {
        $user = Auth::user();
        $data = User::all();
        $studio = tempatStudio::all();
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
        $studio = new tempatStudio();
        $studio->judul = $request->input('judul');
        $studio->image = $imageName; // Save the image name in the database
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

    function editStudio (Request $request, $id) {
        $studio = Studio::findOrFail($id);

        if (!$studio) {
            // Handle record not found scenario (e.g., redirect with error message)
            return abort(404);  // Return HTTP 404 Not Found
        }


        $validator = $studio->validate($request->all()); // Call validate on the instance

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);  // Handle validation errors
        }


        try {
            $tableData = Studio::findOrFail($id);  // Find the row to update
            $tableData->update($request->only($tableData->getFillable()));  // Update using fillable attributes
        } catch (ModelNotFoundException $e) {
            return abort(404);  // Handle record not found (HTTP 404)
        }

          // Update successful, redirect or return success response
            return redirect()->route('tableData.index')->with('success', 'Data updated successfully!');

    }
}
