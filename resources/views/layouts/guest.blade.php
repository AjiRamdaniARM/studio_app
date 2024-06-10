<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
            .circle {
                width: 10px;
                height: 10px;
                background-color: white;
                border: 1px solid #000000;
                border-radius: 100%
            }
            nav {
                border: 1px solid #000000;
                height: 60px;
            }
            .poppins-light {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: normal;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">

        {{-- nav --}}
        <nav class="bg-white p-4">
            <div class="container mx-auto flex justify-start items-center">
              <ul class="flex space-x-4 ">
                <li><div class="circle"></div></li>
                <li><div class="circle"></div></li>
                <li><div class="circle"></div></li>
              </ul>
            </div>
          </nav>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-5 sm:pt-0 bg-[#fbf4ec]">
            <h1 class="text-3xl  poppins-light py-3">Login</h1>
            <p class="uppercase tracking-wider letter-spacing-2">Sign in to continue</p>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 ">
                {{ $slot }}
            </div>
        </div>


    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
