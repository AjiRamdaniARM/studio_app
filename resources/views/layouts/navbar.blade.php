<nav class="nav">
    <div class="navbar-brand body-logo d-flex justify-content-center align-items-center gap-3">
        <img style="width: 50px" src="assets/img/logo.png" alt="logo_studio">
        <div class="fw-bold">STUDIO <span class="text-danger ">BOOKING</span></div>
    </div>
    <ul class="d-flex gap-5 inter-bold">
        <li>Home</li>
        <li>Photo Studio</li>
        <li>Location</li>
    </ul>

    <div class="grup-button">
        <a href="{{ route('register')}}">
            <button >SIGN UP</button>
        </a>

    </div>
</nav>

{{-- mobile navbar --}}
<div class="mobile-sm">
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
