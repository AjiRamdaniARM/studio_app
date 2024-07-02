<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\ImageProduks;
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
        $datas = tempatStudio::where('id_user', $user->id)->get();
        $details = Studio::join('tempat_studios', 'studios.id_studio', '=', 'tempat_studios.id')
        ->where('tempat_studios.id_user', $user->id)
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
            'dekripsi' => $request->input('deskripsi_produk'),
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

    public function produks (Request $request) {
        if($request->file('file')) {
            $files = $request->file('file');

            $uploadfilepaths = [];

            foreach ($files as $file) {
                // Generate nama file yang unik
                $fileName = time() . '_' . $file->getClientOriginalName();

                // Simpan file ke dalam storage/app/public/uploads
                $imagePath = public_path('assets/img/' . $fileName);

                // Pindahkan file ke direktori public/assets/img
                $file->move(public_path('assets/img'), $fileName);

                ImageProduks::create([
                    'file' => $fileName,
                    'id_produk' => $request->input('id_produk'),
                ]);

                // Tambahkan path file ke array
                $uploadedFilePaths[] = $imagePath;
            }

            // Mengembalikan response dengan path file yang diunggah
            return redirect()->back()->with('message', 'data image produks berhasil si upload');
        } else {
            return response()->json(['message' => 'No files were uploaded.'], 400);
        }



    }

    public function deleteImage ($id) {
        $get = ImageProduks::findOrFail($id);
        $imagePath = public_path('assets/img/' . $get->file);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $get->delete();
        return redirect()->back()->with('message','data image produks berhasil di delete');
    }


}
