@extends('dashboard.html.index')
@section('dashboardContent')
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row d-flex justify-content-center">
<div class="col-xl-6 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-danger user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="m-b-25">
                                                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                                                </div>
                                                                <h6 class="f-w-600 text-white fs-5">{{$user->name}}</h6>
                                                                <p>{{$user->role}}</p>
                                                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Email</p>
                                                                        <h6 class="text-muted f-w-400">{{$user->email}}</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Tanggal Akun</p>
                                                                        <h6 class="text-muted f-w-400">{{$user->created_at}}</h6>
                                                                    </div>
                                                                </div>
                                                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Aksi</p>
                                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger px-5 text-white fw-bold">Edit</button>
                                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                              <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                  <h1 class="modal-title fs-5" id="exampleModalLabel">{{$user->name}}</h1>
                                                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form method="POST" action="{{route('edit.profile',['name', $user->name])}}" class="gap-2 " style="display: flex; flex-direction:column;">
                                                                                        @csrf
                                                                                        <input type="text" name="name"  class="rounded-sm p-2 " placeholder="{{$user->name}}">
                                                                                        <input type="text" class="rounded-sm p-2 " placeholder="{{$user->email}}" name="email">
                                                                                        <button type="submit" class="btn btn-danger text-white fw-semibold">Edit Data</button>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                  <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                    </div>
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
