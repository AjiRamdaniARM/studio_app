@extends('dashboard.html.index')
@section('dashboardContent')
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data user</h4>
                    <div class="block ">
                        <form action="{{url('/detail/studio/manageUser/add/')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="name" placeholder="nama user">
                                <label for="floatingInput">Nama user</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingImage">
                                <label for="floatingImage">Email User</label>
                            </div>
                            <div class="form-floating mb-3">
                               <select class="form-control" name="role" id="role">
                                @foreach ($roles as $role )
                                <option value="{{$role}}">{{ ucfirst($role) }}</option>
                                @endforeach
                               </select>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="floatingImage">
                                <label for="floatingImage">Password User</label>
                            </div>

                            <button type="submit" class="btn btn-primary position-relative mt-2">Tambah Data</button>
                        </form>


                    </div>
                </div>

            </div>

        </div>
    </div>

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
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user2 as $users )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $users->name }}</td>
                                    <td>{{ $users->email }}</td>
                                    <td>{{ $users->role }}</td>
                                    <td class="d-flex gap-3">
                                            <button  data-bs-toggle="modal" data-bs-target="#exampleModal{{$users->id}}" type="button" class="btn btn-primary">Edit</button>

                                            <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$users->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">{{$users->name}}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{url('/detail/studio/manageUser/edit/'.$users->id)}}" method="POST">
                                                        @csrf
                                                        <div class="grup w-full row">
                                                            <div class="col-sm-6 mb-3">
                                                                <label>Nama User</label>
                                                                <input type="text"
                                                                class="form-control"
                                                                id="floatingInput"
                                                                name="name"
                                                                value="{{$users->name}}">
                                                            </div>
                                                            <div class="col-sm-6 mb-3">
                                                                <label >Email</label>
                                                                <input type="email"
                                                                class="form-control"
                                                                id="floatingInput"
                                                                name="email"
                                                                value="{{$users->email}}"
                                                                >
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 ">
                                                            <label for="floatingTextarea">Role User</label>
                                                            <select name="role" id="role">
                                                                @foreach ($roles as $role)
                                                                <option  value="{{ $role }}">  {{ ucfirst($role) }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                            </div>
                                        </div>
                                        <form action="{{url('/detail/studio/manageUser/delete/'.$users->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger text-white" type="submit">Delete</button>
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
@endsection
