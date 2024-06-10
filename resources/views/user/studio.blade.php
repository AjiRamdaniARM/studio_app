@extends('layouts.main')
@section('content')


<style>
    .grup {
        position: relative;
        width: 20em;
        height:  20em;
        border-radius: 400px 400px 0px 0px;
        border: 3px solid #000;
        background-image: url('https://i.pinimg.com/originals/29/f2/67/29f2676e9836e48bd406e0d324b926e5.jpg');
        background-position: center;
        background-size: cover;
    }
</style>


<main class="container relative mt-4 p-3 ">
    <div class="row  align-items-start">
        <div style="color: #761208" class="col-md-6  fw-bold fst-italic fs-1">
            Feel the freedom of style in your photo studio
        </div>
        <div class="col-md-6 fw-semibold " style="color:#201261">
            Choosing a photo studio that is suitable for your style is a breakthrough in getting satisfying photo results
        </div>
    </div>

    <div  class="d-flex position-relative py-5">
        <div class="grup">

        </div>
    </div>
</main>

@endsection
