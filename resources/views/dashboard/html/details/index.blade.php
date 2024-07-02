@extends('dashboard.html.index')
@section('dashboardContent')

<style>
    .loading {
        display: none;
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid blue;
        border-right: 16px solid green;
        border-bottom: 16px solid red;
        border-left: 16px solid pink;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<div class="block">
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                      <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">Manage Detail Studio</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold text-uppercase ">{{$data->judul}}</h1>
            </div>
        </div>

        <br>
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contact Kontent</h4>
                        <div class="block ">
                            <div class="container text-center">
                                <div class="row">
                                  <div class="col d-flex gap-2 align-items-center">
                                    <svg fill="#000000" width="20px" viewBox="-1 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg"><path d="M16.5 9.5a8 8 0 1 1-8-8 8 8 0 0 1 8 8zm-6.479-1.112 3.596-2.077-.127-.22a1.85 1.85 0 0 0-2.07-.784 12.23 12.23 0 0 0-4.47 1.591 12.247 12.247 0 0 0-3.595 3.056 1.857 1.857 0 0 0-.381 2.211l.127.22 3.596-2.076-.127-.221a1.62 1.62 0 0 0-.573-.58A12.477 12.477 0 0 1 9.679 7.38a1.616 1.616 0 0 0 .215.787zm-2.749 2.916-.175-.303-3.595 2.077.175.304a.462.462 0 0 0 .629.168l2.798-1.616a.462.462 0 0 0 .168-.63zm6.92-3.997-.175-.303-3.595 2.077.175.303a.462.462 0 0 0 .63.168l2.797-1.616a.462.462 0 0 0 .168-.63z"/></svg>
                                    {{$data->telepone}}
                                  </div>
                                  <div class="col d-flex gap-2 align-items-center">
                                    <svg fill="#000000"  width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
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
                                    {{$data->sosial}}
                                  </div>
                                  <div class="col d-flex gap-2 align-items-center">

                                    <svg fill="#000000"  width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         viewBox="0 0 512.001 512.001" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M256.001,139.135c-9.206,0-16.695,7.489-16.695,16.695s7.489,16.695,16.695,16.695c9.206,0,16.695-7.489,16.695-16.695
                                                S265.207,139.135,256.001,139.135z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M256.001,38.964c-64.443,0-116.866,52.423-116.866,116.866c0,22.554,6.445,44.445,18.62,63.302l85.019,131.724
                                                c3.076,4.76,8.641,7.173,14.314,7.173c0.022,0,0.055,0,0.087,0c5.695-0.022,11.271-3.412,14.326-8.228l83.28-131.506
                                                c11.837-18.663,18.086-40.26,18.086-62.465C372.866,91.387,320.445,38.964,256.001,38.964z M256.001,205.915
                                                c-27.618,0-50.085-22.467-50.085-50.085s22.467-50.085,50.085-50.085s50.085,22.467,50.085,50.085S283.62,205.915,256.001,205.915
                                                z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M511.134,451.059l-66.78-200.341c-2.272-6.815-8.651-11.413-15.837-11.413h-47.524l-81.286,128.365
                                                c-9.25,14.586-25.499,23.684-42.401,23.749h-0.066h-0.152c-17.445,0-33.281-8.391-42.358-22.445l-83.697-129.67H83.484
                                                c-7.184,0-13.565,4.598-15.837,11.413L0.867,451.059c-3.599,10.821,4.46,21.977,15.837,21.977h478.593
                                                C506.674,473.037,514.734,461.88,511.134,451.059z"/>
                                        </g>
                                    </g>
                                    </svg>
                                    {{$data->alamat}}
                                  </div>
                                </div>
                              </div>
                        </div>
                        <br>
                        <h4 class="card-title">Deskripsi Kontent</h4>
                        <div class="block ">
                            {{$data->deskripsi}}
                        </div>
                        <br>
                        <div class="upload-image">
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data Table Studio</h4>
                        <div class="block ">
                            <div class="loading" id="loading"></div>
                            <script>
                                function showLoading() {
                                    document.getElementById('loading').style.display = 'block';
                                }
                            </script>
                            <form id="formInput" action="{{route('image.upload')}}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="grup w-full row">
                                    <div class="col-sm-6 mb-3">
                                        <label>Nama Produk</label>
                                        <input type="text" class="form-control" id="floatingInput" name="name_produk" required>

                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label >Harga Produk</label>
                                        <input type="number" class="form-control" id="floatingInput" name="harga_produk" required>

                                    </div>
                                </div>

                                <div class="form-floating ">
                                    <textarea required class="form-control" name="deskripsi_produk" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Deskripsi Studio</label>
                                </div>

                                <br>

                                <div class="form-floating mb-3">
                                    <input type="file" name="file" class="form-control" id="floatingImage" required>
                                    <label for="floatingImage">Upload Image</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="id_studio" hidden value="{{$data->id}}">
                                </div>

                                <button type="submit" class="btn btn-danger position-relative text-white mt-2">Tambah Data</button>
                                <a href="{{asset('assets/images/book.png')}}" class="btn btn-danger position-relative text-white mt-2">contoh hasil</a>
                            </form>


                        </div>
                    </div>

                </div>

            </div>
        </div>


        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Produks</h4>
                            <h6 class="card-title m-t-40"><i
                                    class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i>
                                </h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Harga Produk</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">ImageProduk</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($datas as $data )
                                            <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$data->nama_produk}}</td>
                                            <td>{{$data->harga}}</td>
                                            <td>
                                                <img width="100" src="{{asset('assets/img/'.$data->foto_produk)}}" alt="">
                                            </td>
                                            <td>
                                                <a href="{{url('/data/'.$data->id)}}" class="btn btn-primary">Detail</a>
                                            </td>
                                            <td>
                                                <div class="grup d-flex justify-content-center align-items-center gap-3 ">
                                                    <button type="button" data-bs-toggle="modal" tabindex="-1" data-bs-target="#exampleModal{{$data->id}}" class="btn btn-primary" aria-hidden="true">Edit</button>

                                                        <form class="py-2" action="{{ route('delete.detail', ['id' => $data->id]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button  type="submit" class="btn btn-danger text-white">Delete</button>
                                                        </form>

                                                        <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit {{$data->nama_produk}}</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    {{-- forms edit --}}
                                                                    <form action="{{route('data.update',['id' => $data->id])}}" method="POST">
                                                                        @csrf
                                                                        <div class="grup w-full row">
                                                                            <div class="col-sm-6 mb-3">
                                                                                <label>Nama Produk</label>
                                                                                <input type="text"
                                                                                class="form-control"
                                                                                id="floatingInput"
                                                                                name="name_produk"
                                                                                value="{{$data->nama_produk}}">
                                                                            </div>
                                                                            <div class="col-sm-6 mb-3">
                                                                                <label >Harga Produk</label>
                                                                                <input type="number"
                                                                                class="form-control"
                                                                                id="floatingInput"
                                                                                name="harga_produk"
                                                                                value="{{$data->harga}}"
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-floating ">
                                                                            <textarea class="form-control" name="deskripsi_produk" placeholder="Leave a comment here" id="floatingTextarea">{{$data->deksripsi}}</textarea>
                                                                            <label for="floatingTextarea">Deskripsi Studio</label>
                                                                        </div>

                                                                        {{-- <div class="form-floating mb-3">
                                                                            <input type="file" name="file" class="form-control" id="floatingImage">
                                                                            <label for="floatingImage">Upload Image</label>
                                                                        </div> --}}
                                                                        <div class="form-floating mb-3">
                                                                           <input type="text" name="id_studio" hidden value="{{$data->id_studio}}">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                                        </div>
                                                                    </form>
                                                                    {{-- akhit form edit --}}


                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    {{-- akhit button modal edit --}}



                                                </div>
                                            </td>
                                        </tr>
                                            @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>
    </div>

    </div>

@endsection
