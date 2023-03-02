<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
       

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                height:100vh;
                overflow: hidden;
                width: 100vw;
                background-image: url("img/wave-haikei.svg");
                background-size:cover;
                background-repeat: no-repeat;
                position: relative;
                
            }
            @media screen and (max-width:800px){
                    body{
                        background-position:50%;
                        overflow: hidden;
                    }
                }
        </style>
    </head>
   <body>
    
 <header >
    <nav class="d-flex justify-content-between">
    <div style="background:url({{asset("img/logo.png") }});background-position:center; background-size: cover;height: 46px; width: 170px; padding:1px;">
    </div>
    <div>
        <ul class="d-flex me-3 text-decoration-none">
            <li class="me-3">home</li>
            <li class="me-3">Livres</li>
            <li class="me-3">Article</li>
            <li class="me-3">contact</li>
        </ul>
    </div>
    @if (Route::has('login'))
    <div class="px-6 py-4 me-2">
        @auth
            <a href="{{ url('/dashboard') }}" class="text-white">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-white me-3 log ">Log in</a>
            @if (Route::has('register'))
<a href="{{ route('register') }}" class="text-white reg">Register</a>
            @endif
        @endauth
    </div>
@endif
</nav>
 </header>
   </body>
    
</html>
