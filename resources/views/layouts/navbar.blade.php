<nav class="nav shadow-sm">
    <div class="navbar-brand body-logo d-flex justify-content-center align-items-center gap-3">
        <a href="{{url('/')}}">
            <img style="width: 30%" src="{{asset('assets/images/StudioBook.png')}}" alt="logo_studio">
        </a>
            {{-- <div class="fw-bold">STUDIO <span class="text-danger ">BOOKING</span></div> --}}

    </div>
    <ul class="d-flex gap-5 position-relative  inter-bold  " style="right: 200px">
        <li><a class="icon-link-hover link-dark" href="{{url('/')}}">Home</a> </li>
        <li><a class="icon-link-hover link-dark" href="#photo">Photo Studio</a></li>
        <li><a class="icon-link-hover link-dark" href="#location">Location</a></li>
    </ul>

    <div class="grup-button">
        @auth
        <div class="dropdown">
            <a style="border: 2px solid #a30000; border-radius:100px" class="btn  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a></li>
              <li><a class="dropdown-item" href="{{route('studio.profile')}}">Profile</a></li>

              <form action="{{ route('logout') }}" method="post">
                @csrf
                <input name="_method" type="hidden" value="POST">
                <li><button type="submit" class="dropdown-item bg-danger text-light m-3 ">Logout</button></li>
            </form>
            </ul>
          </div>
          @else
          <a href="{{ route('login')}}">
            <button >SIGN IN</button>
        </a>
        @endauth


    </div>
</nav>

{{-- mobile navbar --}}
<div class="mobile-sm shadow-sm">
    <div class="navbar-brand body-logo d-flex justify-content-center align-items-center gap-3">
        <img style="width: 30px" src="assets/img/logo.png" alt="logo_studio">
        <div class="fw-bold">STUDIO <span class="text-danger ">BOOKING</span></div>
    </div>
    <div class="grup-button">
        <a href="{{ route('register')}}">
            <button >SIGN UP</button>
        </a>
     </div>
     <button class="humburger" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: none; background:white">
        <img width="20" src="assets/img/menu.png" alt="humburger-icon">
     </button>

     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Menu Mobile</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <div class="d-flex justify-content-center items-align-center gap-4">
                <div><a class="icon-link-hover link-dark" href="{{url('/')}}">Home</a></div>
                <div><a class="icon-link-hover link-dark" href="#photo">Photo Studio</a></div>
                <div><a class="icon-link-hover link-dark" href="#location">Location</a></div>
             </div>
            </div>
          </div>
        </div>
      </div>
</div>

<style>

    nav ul li a {
        text-decoration: none;
    }

    @media screen and (min-width: 780px) {
    .mobile-sm {
        display: none
    }
   }


@media screen and (max-width: 480px) {
    .nav {
       display: none;
     }
   }

</style>
