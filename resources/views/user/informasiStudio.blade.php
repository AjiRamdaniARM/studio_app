@extends('layouts.main')
@section('content')

    <div class="container-fluid">
        <div class="head container py-4 d-flex flex-wrap justify-content-center items-content-start gap-5">
            <img class="rounded" width="100" src="{{asset('assets/img/'.$getData->foto_produk)}}" alt="{{$getData->nama_produk}}">
            <div class="grup">
                <h1 class="text-uppercase judulDetail  text-center oswald fw-bold">{{$getData->nama_produk}}</h1>
                <div class="d-flex justify-content-around gap-5">
                    <h6 style="font-size: 1em" class="fw-bold">Rp.{{ number_format($getData->harga, 2, ',', '.') }}</h6>
                    <h6 style="font-size: 1em">{{$data->judulStudios}}</h6>
                </div>

            </div>
        </div>
        <div class="container">
            <p>{{$getData->deksripsi}}</p>
        </div>
        <div class="container py-4">
            <div class="row row-cols-4">
                @foreach ($image as $images )
                <div class="col">
                    <img src="{{asset('assets/img/'.$images->file)}}" class="rounded" style="width:100%" alt="">
                </div>
                @endforeach

            </div>
        </div>
    </div>



@endsection
