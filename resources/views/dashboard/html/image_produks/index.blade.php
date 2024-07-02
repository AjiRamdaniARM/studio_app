
@extends('dashboard.html.index')
@section('dashboardContent')

<div class="container-fluid">


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Image Produk</h4>
                    <div class="block ">
                        <div class="loading" id="loading"></div>
                        <script>
                            function showLoading() {
                                document.getElementById('loading').style.display = 'block';
                            }
                        </script>
                        <form id="formInput" action="{{route('image.produks')}}"  method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="grup w-full row">
                                <div id="file-inputs">
                                    <input type="text" name="id_produk"  hidden value="{{$produk->id}}">
                                    <div class="form-floating mb-3">
                                        <input type="file" name="file[]" class="form-control" id="floatingImage" >
                                        <label for="floatingImage">Upload Image</label>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" onclick="addFileInput()">Add Another File</button>
                            <button type="submit" class="btn btn-danger position-relative text-white mt-2">Tambah Data</button>
                        </form>


                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="container-fluid">
        @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
        @endif
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
                                        <th scope="col">File Image</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($image as $images )
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                        <td>
                                            <img width="100" class="rounded-md" src="{{asset('assets/img/'.$images->file)}}" alt="produk">
                                        </td>
                                        <td>
                                            <form action="{{url('data/delete/'.$images->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                {{-- <input type="text" name="id_image" hidden value="{{$images->id}}"> --}}
                                                <button class="btn btn-danger text-white">Delete</button>
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

@endsection


<script>
    function addFileInput() {
    // Create a new div to hold the file input and label
    var newDiv = document.createElement("div");
    newDiv.classList.add("form-group");

    // Create the new file input
    var newInput = document.createElement("input");
    newInput.type = "file";
    newInput.name = "file[]";
    newInput.classList.add("form-control");
    newInput.required = true;

    // Create the new label
    var newLabel = document.createElement("label");
    newLabel.innerText = "Upload Image";

    // Append the input and label to the new div
    newDiv.appendChild(newInput);
    newDiv.appendChild(newLabel);

    // Append the new div to the file-inputs div
    document.getElementById("file-inputs").appendChild(newDiv);
}

</script>
