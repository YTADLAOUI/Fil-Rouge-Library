@extends('layout')
@section('contant')
<header >
    <nav class="d-flex justify-content-between align-items-baseline">
    <div class="dlogo">
        <img class="ilogo" src="{{asset("img/logo.png") }}" alt="">
    </div>
    <div class="linkheadar">
        <ul class="d-flex me-3 p-0">
            <li class="me-4 "><b><a href="#" class="link">Home</a></b></li>
            <li class="me-4 "><b><a href="#" class="link">Livres</a></b></li>
            <li class="me-4 "><b><a href="#"class="link">Article</a></b></li>
            <li class="me-4 "><b><a href="#" class="link">contact</a></b></li>
        </ul>
    </div>
        <div class="log">
        @if (Route::has('login'))
        <div class="px-6 py-4 me-2">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-white">Dashboard</a>
            @else
                <a href="{{ route('login') }}" type="button" class="btn btn-outline-primary login">Log in</a>
                @if (Route::has('register'))
    <a href="{{ route('register') }}" class="btn btn-primary register">Register</a>
                @endif
            @endauth
        </div>
    @endif
    </div>
{{-- respo --}}
<div class="respo">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <i class="bi bi-list"></i>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Livres</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Article</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
            </li>
            
              @if (Route::has('login'))
                  @auth
                  <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                  </li>
                  @else
                    <li class="nav-item">
                      <a href="{{ route('login') }}" 
                      class="nav-link">Log in</a>
                    </li>
                      @if (Route::has('register'))
                      <li class="nav-item">
                         <a href="{{ route('register') }}" class="nav-link">Register</a>
                      </li>
                      @endif
                  @endauth
              @endif
        </ul>
        </div>
    </div>
</div>
  {{-- end respo --}}
</nav>
 </header>
<main class="d-flex justify-content-between biblio">
    <div class="containerCitation">
        <div class="citation"> 
            <span class="khir"><p>خير</p></span>
            <span class="jalis"><p>الجليس في الزمان</p></span>
            <span class="ktab"><p>الكتاب</p></span>
        </div>
    </div>
    <div  class="container-image">
        <img class="imgBibli" src={{asset("img/library.svg")}} alt="">
    </div>
  </main>
@endsection