@extends('layout')
@section('contant')
 <x-app-layout>
    <div class="asortie ">
        <div class="">
            <div class="bg-white overflow-hidden shadow-xl ">
                <div class="container-fluid">
                    <div class="row flex-nowrap">
                        <div class="col-auto col-md-3 col-xl-2 px-0 shadow @if(Auth::user()->role_id ==1) sideMenu @else sideEtudiant @endif">
                            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                    @if(Auth::user()->role_id ==1)
                                    <hr>
                                    <li>
                                        <a href="dashboard" class="nav-link px-0 align-middle text-light">
                                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="bibli" class="nav-link px-0 align-middle text-light">
                                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Biblio</span></a>
                                    </li>
                                    <li>
                                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light">
                                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Youcode</span> </a>
                                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="promo" class="nav-link px-0 text-light"><i class="fs-5 bi-calendar-plus"></i> <span class="ms-1 d-none d-sm-inline">Promo</span> </a>
                                            </li>
                                            <li class="w-100">
                                                <a href="branch" class="nav-link px-0 text-light"><i class="fs-5 bi-file-zip-fill"></i><span class="ms-1 d-none d-sm-inline">Branch</span> </a>
                                            </li>
                                            <li class="w-100">
                                                <a href="class" class="nav-link px-0 text-light"><i class="fs-5 bi-signpost-split"></i>
                                                    <span class="ms-1 d-none d-sm-inline">Class</span> </a>
                                            </li>
                                        </ul>
                                      </li>
                                    <hr>
                                    <li>
                                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light">
                                            <i class="fs-4 bi-journal"></i></i><span class="ms-1 d-none d-sm-inline">Livre</span> </a>
                                            <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="auteur" class="nav-link px-0 text-light"> <i class="bi bi-person"></i> <span class="ms-1 d-none d-sm-inline">auteur</span> </a>
                                            </li>
                                            <li class="w-100">
                                                <a href="categorie" class="nav-link px-0 text-light"><i class="fs-5 bi-app-indicator"></i> <span class="ms-1 d-none d-sm-inline">categorie</span> </a>
                                            </li>
                                        </ul>
                                      </li>
                                    <hr>
                                    <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light">
                                        <i class="fs-4 bi-book-half"></i><span class="ms-1 d-none d-sm-inline">Les Livres</span> </a>
                                        <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                                        <li class="w-100">
                                            <a href="reservationTotal" class="nav-link px-0 text-light"> <i class="fs-5 bi-files"></i><span class="ms-1 d-none d-sm-inline">Tout les livres</span> </a>
                                        </li>
                                        <li class="w-100">
                                            <a href="personelResrvation" class="nav-link px-0 text-light"> <i class="fs-5 bi-file"></i><span class="ms-1 d-none d-sm-inline">Votre Livre</span> </a>
                                        </li>
                                    </ul>
                                  </li>
                                <hr>
                                    <li>
                                        <a href="register" class="nav-link px-0 align-middle text-light">
                                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Users</span> </a>
                                    </li>
                                </ul>
                                <hr>
                                @else
                                <li class="nav-item">
                                    <a href="#" class="nav-link align-middle px-0 text-light">
                                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                    </a>
                                </li>
                                <li>
                                <a href="#" class="nav-link px-0 align-middle text-light">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                                </li>
                            <hr>
                            <li>
                                <a href="{{ url('/livre') }}" class="nav-link px-0 align-middle text-light">
                                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">All Products</span> </a>
                            </li>
                            <hr>
                        </ul>
                        <hr>
                                @endif   
                            </div>
                        </div>
                        <div class=" @if(Auth::user()->role_id ==1) cartContainer @else cartContainer0 @endif col py-2">
                          @yield('content')
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@endsection
