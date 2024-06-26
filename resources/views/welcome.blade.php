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
                    <button  style="background-color: #969696" class="rounded-lg px-small py-1 border-none text-putih">Lihat Detail Studio</button>
                </a>


                <button class="rounded-lg bg-merahTua text-putih border-none py-1">Pilih</button>
            </div>
        </div>
        @endforeach
    </div>
</main>

<main id="location">
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-3">
                <div class="col-lg-8 col-xl-7">
                    <span class="text-muted">LOCATION</span>
                    <h2 class="display-5 fw-bold">Lokasi Studio Photo</h2>
                    <p class="lead">Beberapa Lokasi tempat studio photo yang tersedia</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63374.292703118204!2d107.60195797312115!3d-6.903362472292821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1719332492162!5m2!1sid!2sid" style="width: 100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-md-7">
                    <div class="accordion gap-3" style="display: flex; flex-direction:column; " id="Questions-accordion">
                        @foreach ($getData as $getDatas )

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="Questions-headingOne"><button aria-controls="Questions-collapseOne" aria-expanded="false" class="accordion-button collapsed bg-light" data-bs-target="#Questions-collapseOne" data-bs-toggle="collapse" type="button">
                            <div class="text-muted me-3">
                                <svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
                            </div>Lorem ipsum dolor sit amet adipisicing ?</button></h2>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
