@extends('dashboard.html.index')
@section('dashboardContent')


        <div class="">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Studio Admin</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Studio Admin</h1>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tambah Data Table Studio</h4>
                                <div class="block ">
                                    <form action="{{ url('studio/admin/post') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" name="judul" placeholder="Nama Studio">
                                            <label for="floatingInput">Nama Studio</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="file" name="image" class="form-control" id="floatingImage">
                                            <label for="floatingImage">Upload Image</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary position-relative mt-2">Tambah Data</button>
                                    </form>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table Studio</h4>
                                <h6 class="card-title m-t-40"><i
                                        class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i>
                                    </h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Studio</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Created_At</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($studio as $studios )
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$studios->judul}}</td>
                                                <td><img style="width: 100px; border-radius:10px;" src="{{asset('assets/img/'.$studios->image)}}" alt=""></td>
                                                <td>{{$studios->created_at}}</td>
                                                <td>
                                                    <form action="{{ url('studio/admin/delete/'.$studios->id) }}" >
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn bg-danger text-white rounded" type="submit">Delete</button>
                                                    </form>
                                                    <br>
                                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$studios->id}}">Edit</button>
                                                        {{-- modal button --}}
                                                        <div class="modal fade" id="staticBackdrop{{$studios->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                              <div class="modal-content">
                                                                <div class="modal-header">
                                                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                  <form action="{{url('studio/admin/edit/'.$studios->id)}}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="text" class="form-control" id="floatingInput" name="judul" value="{{$studios->judul}}" required>
                                                                    <br>
                                                                    <input type="file" class="form-control" id="floatingInput" name="image" required>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Edit Data</button>
                                                                      </div>
                                                                  </form>
                                                                </div>

                                                              </div>
                                                            </div>
                                                          </div>
                                                          {{-- modal end --}}
                                                        <div class="modal fade" id="staticBackdrop{{$studios->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                              <div class="modal-content">
                                                                <div class="modal-header">
                                                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">{{$studios->judul}} </h1>
                                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body d-flex justify-content-center items-center">
                                                                  <img width="300" src="{{asset('assets/images/delete.gif')}}" alt="delete">
                                                                </div>
                                                                <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                  <form action="{{ route('studio.delete', ['id' => $studios->id]) }}" method="GET">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button  type="submit" class="btn btn-danger text-white">Iya, Delete</button>
                                                                  </form>

                                                                </div>
                                                              </div>
                                                            </div>
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

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>




@endsection
