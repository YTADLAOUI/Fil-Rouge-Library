@extends('layouts.principal')
@section('content')
     <!-- // Minimal statistics section end -->
     <div class="row items-center me-0">
      <h1 class="col fw-bold ms-3 mt-5">Your products</h1>
      <button class="col-4 me-5 mt-5 btn btn-dark w-auto" href="#modal-meal" data-bs-toggle="modal"data-bs-target="#exampleModal"><b>+ </b> Add Product</button>
      </div>
      <div class="container pt-5 table-responsive">

              <table class="table table-responsive rounded me-5">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Image</th>
                      <th scope="col">Name</th>
                      <th scope="col">Autor</th>
                      <th scope="col">Categorie</th>
                      <th scope="col">Date de reservation </th>
                      <th scope="col">status</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($reservations as $key=>$reserve)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td><img class="rounded" src="{{asset("images/".$reserve->livres->image)}}" width="50" height="60"></td>
                      <td>{{$reserve->livres->titre}}</td>
                      <td>{{$reserve->livres->auteurs->nom}}</td>
                      <td>{{$reserve->livres->categories->nom}}</td>
                      <td>{{$reserve->dateReservation}}</td>
                      <td>{{$reserve->status}}</td>
                      <td>
                        <form action="{{url('reservation/'.$reserve->id)}}" method="POST">
                          @csrf
                          @method("DELETE")
                          <button type="submit" class="text-decoration-none text-danger fw-bold">delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
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