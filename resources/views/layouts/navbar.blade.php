
<nav class="nav shadow-sm">
    <div class="navbar-brand body-logo d-flex justify-content-center align-items-center gap-3">
        <img style="width: 50px" src="assets/img/logo.png" alt="logo_studio">
        <div class="fw-bold">STUDIO <span class="text-danger ">BOOKING</span></div>
    </div>
    <ul class="d-flex gap-5 inter-bold  ">
        <li><a class="icon-link-hover link-dark" href="{{url('/')}}">Home</a> </li>
        <li><a class="icon-link-hover link-dark" href="{{ route('studio_app')}}">Photo Studio</a></li>
        <li><a class="icon-link-hover link-dark" href="">Location</a></li>
    </ul>

    <div class="grup-button">
        <a href="{{ route('login')}}">
            <button >SIGN IN</button>
        </a>

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
     <div class="humburger">
        <img width="20" src="assets/img/menu.png" alt="humburger-icon">
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
