@extends('layout')
@section('contant')
 <x-app-layout>
    <div class="asortie ">
        <div class="">
            <div class="bg-white overflow-hidden shadow-xl ">
                <div class="container-fluid">
                    <div class="row flex-nowrap">
                        <div class="col-auto col-md-3 col-xl-2 px-0 shadow sideMenu">
                            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
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
                                    <li class="sidenav-item">
                                        <a class="sidenav-link"><i class="fas fa-grin fa-fw me-3"></i><span>Category 1</span></a>
                                        <ul class="sidenav-collapse show">
                                          <li class="sidenav-item">
                                            <a class="sidenav-link">Link 2</a>
                                          </li>
                                          <li class="sidenav-item">
                                            <a class="sidenav-link">Link 3</a>
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
                                
                            </div>
                        </div>
                        <div class="cartContainer col py-2">
                          @yield('content')
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@endsection
