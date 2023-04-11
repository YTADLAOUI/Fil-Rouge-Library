@extends('layouts.principal')
@section('content')
<div class="row items-center me-0">
  <h1 class="col fw-bold ms-3 mt-5">auteur</h1>
  <button class="col-4 me-5 mt-5 btn btn-dark w-auto" href="#modal-meal" data-bs-toggle="modal"data-bs-target="#exampleModal3"><b>+ </b> Add Product</button>
  </div>
  <div class="container pt-5 table-responsive">
              @if (session('error'))
              <div class="alert alert-danger">
                  {{ session('error') }}
              </div>
              @elseif(session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
                @endif
            </div>
          <table class="table table-responsive rounded me-5">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($auteurs as $key=>$auteur)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$auteur->nom}}</td> 
                      <td><a href="{{ url('auteur/'.$auteur->id.'/edit') }}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                      <td>
                        <form action={{"auteur/".$auteur->id}} method="POST">
                          @method("DELETE")
                          {!!@csrf_field()!!}
                          <button type="submit" class="text-decoration-none text-danger fw-bold">delete</button>
                        </form>
                      </td>
                    </tr>
                @endforeach
              </tbody>
          </table> 
  </div>
{{-- <-------modal----------> --}}
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="exampleModalLabel">New autor</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form action="auteur" method="POST">
  @csrf
<div class="form-floating mb-3 ">
  <input type="text" class="form-control" name="nom" id="name" placeholder="name" required>
  <label for="name">Name</label>
</div>
<div class="modal-footer">
  <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Send </button>
  </div>
</form>
</div>

</div>
</div>
</div>
{{-- ------------------------------------------------------------ --}}
@endsection