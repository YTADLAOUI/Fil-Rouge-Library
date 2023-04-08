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
                                    <li class="nav-item">
                                        <a href="#" class="nav-link align-middle px-0 text-light">
                                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                        </a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light">
                                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="#" class="nav-link px-0 align-middle text-light">
                                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                                    </li>
                                    <li>
                                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                                            <i class="bi bi-bookmarks"></i> <span class="ms-1 d-none d-sm-inline">Biblio</span> </a>
                                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                            <li class="w-100">
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline text-dark">Product</span> 1</a>
                                            </li>
                                        </ul>
                                      </li>
                                    <hr>
                                    <hr>
                                    <li>
                                        <a href="#" class="nav-link px-0 align-middle text-light">
                                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light">
                                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{ url('landing') }}" class="nav-link px-0 align-middle text-light">
                                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">All Products</span> </a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="#" class="nav-link px-0 align-middle text-light">
                                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                                    </li>
                                </ul>
                                <hr>
                                @else
                                <a href="#" class="nav-link px-0 align-middle text-light">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                            </li>
                            <hr>
                            <li>
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light">
                                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                            </li>
                            <hr>
                            <li>
                                <a href="{{ url('landing') }}" class="nav-link px-0 align-middle text-light">
                                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">All Products</span> </a>
                            </li>
                            <hr>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle text-light">
                                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                            </li>
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
