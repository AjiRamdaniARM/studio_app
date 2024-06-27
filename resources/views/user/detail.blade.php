@extends('layouts.main')
@section('content')

    <div class="container-fluid py-5">
        <div class="head container">
            <h1 class="text-uppercase judulDetail  text-center oswald fw-bold">{{$get->judul}}</h1>
        </div>


        <div class="body">
            <div class="py-5">
                <div class="row justify-content-center gap-3">
                    @if($getData->isEmpty())
                    <div class="text-center">
                        <h1 style="font-size: 30px" class="text-center roboto-bold">Data tidak tersedia</h1>
                    </div>
                @else
                    @foreach ($getData as $getDatas)
                        <div class="col-auto" style="
                        display: flex;
                        flex-direction: column;
                        ">
                            <div style="
                                width:20em;
                                height:20em;
                                border-radius:10px;
                                background-image: url('assets/img/{{ $getDatas->foto_produk }}');
                                background-size: cover;">
                            </div>
                            <br>
                            <h1 style="font-size: 30px" class="text-center roboto-bold">{{$getDatas->nama_produk}}</h1>
                            <a href="{{url('/detailinformasi'.$getDatas->id)}}">
                                <button style="
                                border-radius: 10px;
                                background-color: rgb(174, 4, 4);
                                border:none;
                                color:white;
                                padding: 7px;
                                width:100%
                                " class="text-center">Pilih</button>
                            </a>

                        </div>
                    @endforeach
                @endif


                </div>
            </div>

            <!--====== CONTACT ONE PART START ======-->
<section class="contact-area">
    <div class="container">
       <div class="row align-items-start">
          <div class="col-xl-7 col-lg-8 ">
            <div class="deskripsi mt-45">
                @if($getData->isEmpty())
                <p class="text-start" style="width: 50em">data belum ada</p>
                @else
                <p class="text-start p-detail">{{$data->deskripsi}}</p>
                @endif

            </div>
             <!-- contact form -->
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 offset-xl-1">
             <div class="section-title ">
                <h3 class="title">Contact Information</h3>
             </div>
             <div class="contact-info">
                <div class="grup">
                    <svg fill="#000000" width="20px"  viewBox="-1 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg"><path d="M16.5 9.5a8 8 0 1 1-8-8 8 8 0 0 1 8 8zm-6.479-1.112 3.596-2.077-.127-.22a1.85 1.85 0 0 0-2.07-.784 12.23 12.23 0 0 0-4.47 1.591 12.247 12.247 0 0 0-3.595 3.056 1.857 1.857 0 0 0-.381 2.211l.127.22 3.596-2.076-.127-.221a1.62 1.62 0 0 0-.573-.58A12.477 12.477 0 0 1 9.679 7.38a1.616 1.616 0 0 0 .215.787zm-2.749 2.916-.175-.303-3.595 2.077.175.304a.462.462 0 0 0 .629.168l2.798-1.616a.462.462 0 0 0 .168-.63zm6.92-3.997-.175-.303-3.595 2.077.175.303a.462.462 0 0 0 .63.168l2.797-1.616a.462.462 0 0 0 .168-.63z"/></svg>
                    @if($getData->isEmpty())
                   data belum ada
                    @else
                  {{$data->telepone}}
                    @endif
                </div>
                <div class="grup">
                    <svg fill="#000000" height="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="-143 145 512 512" xml:space="preserve">
                    <g>
                        <path d="M113,446c24.8,0,45.1-20.2,45.1-45.1c0-9.8-3.2-18.9-8.5-26.3c-8.2-11.3-21.5-18.8-36.5-18.8s-28.3,7.4-36.5,18.8
                            c-5.3,7.4-8.5,16.5-8.5,26.3C68,425.8,88.2,446,113,446z"/>
                        <polygon points="211.4,345.9 211.4,308.1 211.4,302.5 205.8,302.5 168,302.6 168.2,346 	"/>
                        <path d="M183,401c0,38.6-31.4,70-70,70c-38.6,0-70-31.4-70-70c0-9.3,1.9-18.2,5.2-26.3H10v104.8C10,493,21,504,34.5,504h157
                            c13.5,0,24.5-11,24.5-24.5V374.7h-38.2C181.2,382.8,183,391.7,183,401z"/>
                        <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M241,374.7v104.8
                            c0,27.3-22.2,49.5-49.5,49.5h-157C7.2,529-15,506.8-15,479.5V374.7v-52.3c0-27.3,22.2-49.5,49.5-49.5h157
                            c27.3,0,49.5,22.2,49.5,49.5V374.7z"/>
                    </g>
                    </svg>
                    @if($getData->isEmpty())
                    data belum ada
                    @else
                    {{$data->sosial}}
                    @endif
                </div>
                <div class="grup">
                        <svg fill="#000000" height="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M256.001,0C148.342,0,60.755,87.586,60.755,195.245c0,56.66,16.898,115.289,50.225,174.26
                                    c28.99,51.297,65.23,93.242,90.526,119.398C215.912,503.798,235.265,512,256,512c20.735,0,40.088-8.202,54.494-23.098
                                    c25.296-26.155,61.536-68.101,90.526-119.398c33.327-58.971,50.225-117.6,50.225-174.26C451.246,87.586,363.659,0,256.001,0z
                                    M256.001,270.381c-41.43,0-75.136-33.706-75.136-75.136c0-41.43,33.705-75.136,75.136-75.136
                                    c41.43,0,75.136,33.706,75.136,75.136C331.137,236.675,297.431,270.381,256.001,270.381z"/>
                            </g>
                        </g>
                        </svg>
                        @if($getData->isEmpty())
                       data belum ada
                        @else
                       {{$data->alamat}}
                        @endif
                </div>
             </div>
             <!-- contact-info -->
          </div>
       </div>
       <!-- row -->
    </div>
    <!-- container -->
 </section>
 <!--====== CONTACT ONE PART ENDS ======-->

            {{-- <div class="deks d-flex flex-wrap justify-content-between align-items-start" >
                <div class="deskripsi">
                    @if($getData->isEmpty())
                    <p class="text-start" style="width: 50em">data belum ada</p>
                    @else
                    <p class="text-start p-detail">{{$data->deskripsi}}</p>
                    @endif

                </div>
                <div class="contact">
                    <h1>Contact Us</h1>
                    <div class="grup">
                        <svg fill="#000000" width="20px"  viewBox="-1 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg"><path d="M16.5 9.5a8 8 0 1 1-8-8 8 8 0 0 1 8 8zm-6.479-1.112 3.596-2.077-.127-.22a1.85 1.85 0 0 0-2.07-.784 12.23 12.23 0 0 0-4.47 1.591 12.247 12.247 0 0 0-3.595 3.056 1.857 1.857 0 0 0-.381 2.211l.127.22 3.596-2.076-.127-.221a1.62 1.62 0 0 0-.573-.58A12.477 12.477 0 0 1 9.679 7.38a1.616 1.616 0 0 0 .215.787zm-2.749 2.916-.175-.303-3.595 2.077.175.304a.462.462 0 0 0 .629.168l2.798-1.616a.462.462 0 0 0 .168-.63zm6.92-3.997-.175-.303-3.595 2.077.175.303a.462.462 0 0 0 .63.168l2.797-1.616a.462.462 0 0 0 .168-.63z"/></svg>
                        @if($getData->isEmpty())
                       data belum ada
                        @else
                      {{$data->telepone}}
                        @endif
                    </div>
                    <div class="grup">
                        <svg fill="#000000" height="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="-143 145 512 512" xml:space="preserve">
                        <g>
                            <path d="M113,446c24.8,0,45.1-20.2,45.1-45.1c0-9.8-3.2-18.9-8.5-26.3c-8.2-11.3-21.5-18.8-36.5-18.8s-28.3,7.4-36.5,18.8
                                c-5.3,7.4-8.5,16.5-8.5,26.3C68,425.8,88.2,446,113,446z"/>
                            <polygon points="211.4,345.9 211.4,308.1 211.4,302.5 205.8,302.5 168,302.6 168.2,346 	"/>
                            <path d="M183,401c0,38.6-31.4,70-70,70c-38.6,0-70-31.4-70-70c0-9.3,1.9-18.2,5.2-26.3H10v104.8C10,493,21,504,34.5,504h157
                                c13.5,0,24.5-11,24.5-24.5V374.7h-38.2C181.2,382.8,183,391.7,183,401z"/>
                            <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M241,374.7v104.8
                                c0,27.3-22.2,49.5-49.5,49.5h-157C7.2,529-15,506.8-15,479.5V374.7v-52.3c0-27.3,22.2-49.5,49.5-49.5h157
                                c27.3,0,49.5,22.2,49.5,49.5V374.7z"/>
                        </g>
                        </svg>
                        @if($getData->isEmpty())
                        data belum ada
                        @else
                        {{$data->sosial}}
                        @endif
                    </div>
                    <div class="grup">
                            <svg fill="#000000" height="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M256.001,0C148.342,0,60.755,87.586,60.755,195.245c0,56.66,16.898,115.289,50.225,174.26
                                        c28.99,51.297,65.23,93.242,90.526,119.398C215.912,503.798,235.265,512,256,512c20.735,0,40.088-8.202,54.494-23.098
                                        c25.296-26.155,61.536-68.101,90.526-119.398c33.327-58.971,50.225-117.6,50.225-174.26C451.246,87.586,363.659,0,256.001,0z
                                        M256.001,270.381c-41.43,0-75.136-33.706-75.136-75.136c0-41.43,33.705-75.136,75.136-75.136
                                        c41.43,0,75.136,33.706,75.136,75.136C331.137,236.675,297.431,270.381,256.001,270.381z"/>
                                </g>
                            </g>
                            </svg>
                            @if($getData->isEmpty())
                           data belum ada
                            @else
                           {{$data->alamat}}
                            @endif
                    </div>
                </div>
            </div> --}}


        </div>
    </div>
@endsection
