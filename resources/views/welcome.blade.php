@extends('layouts.main')
@section('content')

<style>
    .grup {
        position: relative;
        width: 20em;
        height:  20em;
        border-radius: 400px 400px 0px 0px;
        border: 2px solid #000;
        background-position: center;
        background-size: cover;
    }
</style>

<main class="container content">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('assets/img/hero.png')}}" class="d-block w-100" alt="Slide 1">
          </div>
          <div class="carousel-item ">
            <img src="https://i.pinimg.com/originals/da/1d/38/da1d38c68622eb64fb79ea10163e49eb.jpg" class="d-block w-100" alt="Slide 2">
          </div>
          <div class="carousel-item">
            <img src="https://www.imagely.com/wp-content/uploads/2016/05/studio-setup-1024x640.jpg" class="d-block w-100" alt="Slide 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</main>

<br>

<main class="container relative mt-4 p-3 " id="photo">
    <div class="row align-items-start">
        <div style="color: #761208" class="col-md-6  fw-bold fst-italic fs-1">
            Feel the freedom of style in your photo studio
        </div>
        <div class="col-md-6 fw-semibold " style="color:#201261">
            Choosing a photo studio that is suitable for your style is a breakthrough in getting satisfying photo results
        </div>
    </div>


    <div style="margin-top: 80px" class="d-flex flex-wrap position-relative justify-content-center align-items-center gap-5 ">
        @foreach ($getData as $getDatas )
        <div style="flex-direction: column;" class="block d-flex justify-content-center align-items-center ">
            <h4 style="width:230px" class="text-center fw-bold">{{$getDatas->judul}}</h4>
            <div class="grup" style="background-image: url('assets/img/<?php echo $getDatas->image; ?>')">
            </div>
            <div style="flex-direction: column" class="box-grup d-flex p-3 gap-2 ">
                <a href="{{url('/detail'.$getDatas->id)}}">
                    <button  style="background-color: #969696" class="button-detail rounded-lg px-small py-1 border-none text-putih">Lihat Detail Studio</button>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</main>



@endsection
