@extends('layout')
@section('contant')
 <x-app-layout>
    <div class="py-12">
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
                        <div class="col py-2">
                            {{-- <div class="col-md-3 col-xl-3 col-sm-6 col-12 mb-2"> --}}
                            <div class="container">
                                <!-- Minimal statistics section start -->
                                <div class="row ">
                                    <div class="col-12 mt-3 mb-3">
                                    <h4 class="text-uppercase">Statistics</h4>
                                    </div>
                                </div>

                                <div class="row justify-content-center" style="width: 90%">
                                    <div class="col-md-3 col-xl-2 col-sm-10 col-12 me-3 ">
                                        <div class="card row">
                                            <div class="text-center">
                                                <i class="bi bi-list-ul"></i>
                                                <h3>156</h3>
                                                <p>Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xl-2 col-sm-10 col-12 me-3">
                                        <div class="card row">
                                            <div class="text-center">
                                                <i class="bi bi-list-ul"></i>
                                                <h3>156</h3>
                                                <p>Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xl-2 col-sm-10 col-12 me-3">
                                        <div class="card row">
                                            <div class="text-center">
                                                <i class="bi bi-list-ul"></i>
                                                <h3>156</h3>
                                                <p>Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xl-2 col-sm-10 col-12 m-1">
                                        <div class="card row">
                                            <div class="text-center">
                                                <i class="bi bi-list-ul"></i>
                                                <h3>156</h3>
                                                <p>Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                  
                            </div>


                            <!-- // Minimal statistics section end -->
                            </div>
                            <div class="row items-center me-0">
                                <h1 class="col fw-bold ms-3 mt-5">Your products</h1>
                               
                                <button class="col-4 me-5 mt-5 btn btn-dark w-auto" href="#modal-meal" data-bs-toggle="modal"><b>+ </b> Add Product</button>
                                </div>
                                <div class="container pt-5 table-responsive">
                        
                                        <table class="table table-responsive bg-white rounded me-5">
                                            <thead>
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Autor</th>
                                                <th scope="col">Descriptio</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @php
                                                $count = 1;
                                                @endphp --}}
                                            {{-- @foreach ($meals as $meal) --}}
                                              <tr>
                                                <td>test</td>
                                                <td>test</td>
                                                <td><img class="rounded" src="{{asset('/images/22.svg')}}" width="100" height="60"></td>
                                                <td><span class="d-inline-block text-truncate" style="max-width: 150px;">test</span></td>
                                                <td>test</td>
                                                <td>test</td>
                                                <td>test</td>
                                                <td>test</td>
                                                <td><a href="{{ url('edit') }}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                                                <td><a href="" class="text-decoration-none text-danger fw-bold">delete</a></td>
                                              </tr>
                                              
                                               
                                              {{-- @php
                                                $count ++;
                                                @endphp --}}
                                                {{-- @endforeach --}}
                                            </tbody>
                                        </table> 
                                        
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@endsection