@extends('dashboard.html.index')
@section('dashboardContent')



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
                <h1 class="mb-0 fw-bold">Manage Detail Studio</h1>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah detail lengkap Studio</h4>
                        <div class="block ">
                            <form  id="formInput"  >
                                @csrf
                                <div class="row">
                                    <div class="form-floating mb-3 col-md-6">
                                        <select class="form-select py-3 rounded" id="floatingSelectGrid" name="studio">
                                            <option selected>Select Data Studio</option>
                                            @foreach ($datas as $data )
                                            <option value="{{$data->id}}">{{$data->judul}}</option>
                                            @endforeach
                                          </select>

                                    </div>
                                    <div class=" mb-3 col-md-6">
                                        <input type="text" class="form-control py-3 rounded" id="floatingInput2" name="nomor" placeholder="Nomor Telephone">
                                    </div>
                                </div>
                                <div class="row">

                                    <div class=" mb-3 col-md-6">
                                        <input type="text" class="form-control py-3 rounded" id="floatingInput2" name="instagram" placeholder="@nama akun Instagram">
                                    </div>
                                    <div class=" mb-3 col-md-6">
                                        <input type="text" class="form-control py-3 rounded" id="floatingInput2" name="alamat" placeholder="Alamat">
                                    </div>
                                </div>

                                <div class="form-floating ">
                                    <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Deskripsi Studio</label>
                                  </div>
                                  <br>
                                {{-- <div class="form-floating mb-3 row row-cols-5 gap-5">

                                    <div class="card">
                                        <div class="card-body justify-content-center align-items-center" style="display: flex; flex-direction:column">
                                          <img width="100" src="{{asset('assets/images/upload.gif')}}" alt="">
                                          <button class="btn btn-danger text-white" onclick="alert('ss')" id="uploadButton" onclick="">Upload Image</button>
                                          <input type="file" id="fileInput" style="display: none;">
                                          <script>
                                               document.getElementById('uploadButton').addEventListener('click', function() {
                                                document.getElementById('fileInput').click();
                                            });
                                          </script>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body justify-content-center align-items-center " style="display: flex; flex-direction:column">
                                          <img width="100" src="{{asset('assets/images/upload.gif')}}" alt="">
                                          <button href="#" class="btn btn-danger text-white">Upload Image</button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body justify-content-center align-items-center " style="display: flex; flex-direction:column">
                                          <img width="100" src="{{asset('assets/images/upload.gif')}}" alt="">
                                          <button href="#" class="btn btn-danger text-white">Upload Image</button>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body justify-content-center align-items-center " style="display: flex; flex-direction:column">
                                          <img width="100" src="{{asset('assets/images/upload.gif')}}" alt="">
                                          <button href="#" class="btn btn-danger text-white">Upload Image</button>
                                        </div>
                                    </div>


                                </div> --}}
                                <button type="submit" class="btn btn-primary position-relative mt-2">Tambah Data</button>
                            </form>



                        </div>
                    </div>

                </div>

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
                        <h4 class="card-title">Data Table Studio</h4>
                        <h6 class="card-title m-t-40"><i
                                class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i>
                            </h6>
                        <div class="table-responsive">
                            <table class="table"  id="studioTable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Studio</th>
                                        <th scope="col">Deksripsi</th>
                                        <th scope="col">Telephone</th>
                                        <th scope="col">Sosial</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Detail</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($details as $detail )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$detail->judul}}</td>
                                        <td>
                                            <button data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$detail->studio_id}}" class="btn bg-danger text-white rounded">Show Deskripsi</button>
                    <div class="modal fade" id="staticBackdrop{{$detail->studio_id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{$detail->studio_id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel{{$detail->id}}">{{$detail->judul}}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{$detail->deskripsi}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                                        </td>
                                        <td>{{$detail->telepone}}</td>
                                        <td>{{$detail->sosial}}</td>
                                        <td>{{$detail->alamat}}</td>
                                        <td class="d-flex gap-3">
                                            <a href="{{url('detail/studio/data/'.$detail->TempatStudios_id)}}" class="btn bg-primary text-white rounded">Detail</a>
                                            <form action="{{ url('detail/studio/deleteDetail/'.$detail->TempatStudios_id) }}" >
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn bg-danger text-white rounded" type="submit">Delete</button>
                                            </form>
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


{{-- backend ajax --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#formInput').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '{{ route('studio.detail') }}',
                data: $(this).serialize(),
                success: function(response) {
                if(response.success) {
                    alert(response.success);
                    $('#formInput')[0].reset();

                    // Menambahkan data baru ke tabel tanpa refresh halaman
                    var newRow = '<tr>' +
                        '<td>' + ($('#studioTable tbody tr').length + 1) + '</td>' +
                        '<td>' + response.data2.judul + '</td>' +
                        '<td><button class="btn bg-danger text-white rounded">Show Deskripsi</button></td>' +
                        '<td>' + response.data.telepone + '</td>' +
                        '<td>' + response.data.sosial + '</td>' +
                        '<td>' + response.data.alamat + '</td>' +
                        '<td><button class="btn bg-denger text-white rounded">Detail</button></td>' +
                        '</tr>';

                    $('#studioTable tbody').append(newRow);
                }
            },
                error: function(response) {
                    alert('An error occurred');
                    console.log(response);
                }
            });
        });
    });
</script>
@endsection
