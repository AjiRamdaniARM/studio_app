@extends('dashboard.html.index')
@section('dashboardContent')


<style>
    .btn-circle {
        width: 60px; /* Adjust the size as needed */
        height: 60px; /* Ensure width and height are the same */
        border-radius: 50%; /* Make it a circle */
        padding: 0; /* Remove any padding */
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden; /* Hide overflow to maintain circular shape */
    }

    .btn-circle img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensures the image covers the circle area without being distorted */
        border-radius: 50%; /* Make sure the image is also a circle */
    }
</style>

<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                  <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </nav>
            <h1 class="mb-0 fw-bold">Dashboard</h1>
        </div>
    </div>
</div>

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Diagram All Data</h4>
                            <h6 class="card-subtitle">All data diagram</h6>
                        </div>
                    </div>
                    <div class="amp-pxl mt-4" style="height: 350px;">
                        <div class="chartist-tooltip"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Studio</h4>
                    <h6 class="card-subtitle">Beberapa data studio</h6>
                    @foreach ($studio as $studios )
                    <div class="mt-5 pb-3 d-flex align-items-center">
                        <span class="btn btn-primary btn-circle d-flex align-items-center justify-content-center">
                            <img class="rounded-circle" src="assets/img/{{$studios->image}}" alt="">
                        </span>
                        <div class="ms-3">
                            <h5 class="mb-0 fw-bold">{{$studios->judul}}</h5>
                            <span class="text-muted fs-6">{{$studios->created_at}}</span>
                        </div>
                        <div class="ms-auto">
                            <span class="badge bg-light text-muted">{{$studios->id}}</span>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <div class="d-md-flex">
                        <div>
                            <h4 class="card-title">Jumlah data akun </h4>
                            <h5 class="card-subtitle">Manage data user pada website</h5>
                        </div>
                    </div>
                    <!-- title -->
                    <div class="table-responsive">
                        <table class="table mb-0 table-hover align-middle text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Role</th>
                                    <th class="border-top-0">Email</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $datas)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="m-r-10"><a
                                                    class="btn btn-circle d-flex btn-info text-white">EA</a>
                                            </div>
                                            <div class="">
                                                <h4 class="m-b-0 font-16">{{$datas->name}}</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$datas->role}}</td>

                                    <td>
                                        {{$datas->email}}
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
    <!-- ============================================================== -->
    <!-- Table -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
</div>

@endsection
