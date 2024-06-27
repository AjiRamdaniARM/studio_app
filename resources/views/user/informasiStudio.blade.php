@extends('layouts.main')
@section('content')

    <div class="container-fluid">
        <div class="head container py-4">
            <h1 class="text-uppercase judulDetail  text-center oswald fw-bold">{{$getData->nama_produk}}</h1>
        </div>
        <div class="container">
            <div class="row row-cols-12 ">
                <div class="col">
                    <img width="300" style="border-radius: 10px" src="https://i.pinimg.com/originals/42/ec/37/42ec37300d7a5708db0224ce0715dd1b.jpg" alt="photo" />
                </div>
                <div class="col">
                    <img width="300" style="border-radius: 10px" src="https://i.pinimg.com/originals/42/ec/37/42ec37300d7a5708db0224ce0715dd1b.jpg" alt="photo" />
                </div>
                <div class="col">
                    <img width="300" style="border-radius: 10px" src="https://i.pinimg.com/originals/42/ec/37/42ec37300d7a5708db0224ce0715dd1b.jpg" alt="photo" />
                </div>
                <div class="col">
                    <img width="300" style="border-radius: 10px" src="https://i.pinimg.com/originals/42/ec/37/42ec37300d7a5708db0224ce0715dd1b.jpg" alt="photo" />
                </div>
            </div>
        </div>
        <div class="container py-5">
            <p>{{$getData->deksripsi}}</p>
        </div>
    </div>



@endsection
