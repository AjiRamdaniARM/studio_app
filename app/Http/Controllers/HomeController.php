<?php

namespace App\Http\Controllers;

use App\Models\Produks;
use App\Models\Studio;
use App\Models\tempatStudio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $getData = tempatStudio::all();
        $data = Studio::all();
        return view('welcome', compact('getData','data'));
    }

    public function detail($id) {
        $data = DB::table('studios')
        ->join('tempat_studios', 'studios.id_studio', '=', 'tempat_studios.id')
        ->where('studios.id_studio', $id)
        ->select('tempat_studios.*', 'studios.*', 'tempat_studios.judul as judulStudios')
        ->first();

        $get = tempatStudio::where('id', $id)->first();
        $getData = Produks::where('id_studio', $id)->get();
        return view('user.detail', compact('data','getData','get'));
    }

    public function informasi($id) {
        $data = DB::table('studios')
        ->join('tempat_studios', 'studios.id_studio', '=', 'tempat_studios.id')
        ->where('studios.id_studio', $id)
        ->select('tempat_studios.*', 'studios.*', 'tempat_studios.judul as judulStudios')
        ->first();

        $get = tempatStudio::where('id', $id)->first();
        $getData = Produks::where('id', $id)->first();
        return view('user.informasiStudio',compact('data','getData','get'));
    }

}
