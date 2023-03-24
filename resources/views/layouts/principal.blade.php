@extends('layout')
@section('contant')
 <x-app-layout>
    <div class="asortie py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container-fluid">
                    <div class="row flex-nowrap">
                        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light shadow">
                            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                    <span class="fs-5 d-none d-sm-inline mb-5"></span>
                                </a>
                                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link align-middle px-0 text-dark">
                                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                        </a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="#" class="nav-link px-0 align-middle text-dark">
                                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                                    </li>
                                    <hr>
                                    <hr>
                                    <li>
                                        <a href="#" class="nav-link px-0 align-middle text-dark">
                                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{ url('landing') }}" class="nav-link px-0 align-middle text-dark">
                                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">All Products</span> </a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="#" class="nav-link px-0 align-middle text-dark">
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
