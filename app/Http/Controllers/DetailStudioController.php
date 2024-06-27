<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Produks;
use App\Models\Studio;
use App\Models\tempatStudio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DetailStudioController extends Controller
{
    public function index () {
        $user = Auth::user();
        $datas = tempatStudio::all();
        $details = Studio::join('tempat_studios', 'studios.id_studio', '=', 'tempat_studios.id')
        ->select('studios.*', 'tempat_studios.*','studios.id as studio_id','tempat_studios.id as TempatStudios_id')
        ->get();
        return view('dashboard.html.detail_studio.index', compact('user','datas','details'));
    }

    public function detail ($id) {
        $data = DB::table('studios')
        ->join('tempat_studios', 'studios.id_studio', '=', 'tempat_studios.id')
        ->where('tempat_studios.id', $id)
        ->select('studios.*', 'tempat_studios.*', 'tempat_studios.id as id_studio')
        ->first();
        $user = Auth::user();
        $datas = Produks::where('id_studio',$id)->get();
        $getStudio = tempatStudio::all();
        return view('dashboard.html.details.index',compact('user','data','datas','getStudio'));
    }
    public function image(Request $request) {
        $data = new Produks();
        $data -> nama_produk = $request->name_produk;
        $data -> harga = $request->harga_produk;
        $data -> deksripsi = $request->deskripsi_produk;
        // get data image dan masuk ke folder public
        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image -> move(public_path('assets/img'), $imageName);
        $data -> foto_produk = $imageName;
        $data -> id_studio = $request->id_studio;
        $data -> save();
        return redirect()->back()->with('success', 'data detail produk berhasil di upload!!');
    }

    public function updatePost(Request $request, $id) {
        // Cari produk dan update
        $produk = Produks::findOrFail($id);
        $produk ->update ([
            'nama_produk' => $request->input('name_produk'),
            'harga' => $request->input('harga_produk'),
            'deksripsi' => $request->input('deskripsi_produk'),
            'id_studio' => $request->input('id_studio'),
        ]);
        $produk -> save();

         return redirect()->back()->with('success', 'Data berhasil di edit kawan');
    }


    public function delete ($id) {
        $getData = Produks::findOrFail($id);
        $imagePath = public_path('assets/img/' . $getData->foto_produk);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $getData->delete();
        return redirect()->back()->with('success', 'delete data sudah berhasil');
    }

    public function deleteDetail ($TempatStudios_id) {
        $getData = Studio::where('id_studio', $TempatStudios_id)->first();
        $getData->delete();
        return redirect()->back()->with('success', 'delete data sudah berhasil');
    }
}
