@extends('layouts.principal')
@section('content')
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
        <div class="row items-center me-0">
            <h1 class="col fw-bold ms-3 mt-5">Your products</h1>
            {{-- <button type="button" class="col-4 me-5 mt-5 btn btn-dark w-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><b>+ </b> Add Product</button> --}}
            <button class="col-4 me-5 mt-5 btn btn-dark w-auto" href="#modal-meal" data-bs-toggle="modal"data-bs-target="#exampleModal"><b>+ </b> Add Product</button>
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
                          
                          <tr>
                            <td>1</td>
                            <td>test</td>
                            <td>test</td>
                            <td><img class="rounded" src="{{asset('/images/22.svg')}}" width="100" height="60"></td>
                            <td><span class="d-inline-block text-truncate" style="max-width: 150px;">test</span></td>
                            <td>test</td>
                            <td>test</td>
                            <td><a href="{{ url('edit') }}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                            <td><a href="" class="text-decoration-none text-danger fw-bold">delete</a></td>
                          </tr>
                        </tbody>
                    </table> 
            </div>
    
    {{-- <-------modal----------> --}}
    


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
@endsection