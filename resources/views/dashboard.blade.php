@extends('layouts.principal')
@section('content')
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
            @livewire('tout-reservation')
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