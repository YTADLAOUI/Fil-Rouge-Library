@extends('layouts.principal')
@section('content')
<div class="border p-3 rounded me-5 col-sm-12">
    <div class="">
        <div class="row items-center me-0">
          <h1 class="col fw-bold ms-3 mt-5">Promos</h1>
          <button class="col-4 me-5 mt-5 btn btn-dark w-auto" href="#modal-meal" data-bs-toggle="modal"data-bs-target="#exampleModal1"><b>+ </b> Add Product</button>
        </div>
          <div class="mt-3">
              @if ($errors->any())
              <div class="alert alert-danger mt-3">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
              @if(session('success'))
              <div class="alert alert-success mt-3">
                {{ session('success') }}
                @endif
            </div>
          </div>
    <div class="container pt-5 table-responsive">
            <table class="table bg-white rounded me-5">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Promo</th>
                    <th scope="col">Date</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($promos as $KEY => $promo)
                  <tr>
                    <td>{{$KEY+1}}</td>
                    <td>{{$promo->nom}}</td>
                    <td>{{$promo->created_at}}</td>
                    <td>
                          <a class="text-decoration-none text-primary fw-bold" href={{url("promo/".$promo->id."/edit")}}>edit</a>
                    </td>
                    <td>
                      <form action={{"promo/".$promo->id}} method="POST">
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
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter Promo </h1>
                          <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                          </button>
                  </div>
                <div class="modal-body">
                  <form method="POST" action="promo">
                    @csrf
                    <div class="form-floating mb-3 ">
                      
                      <input type="text" class="form-control" name="nom" id="name" placeholder="name" required>
                      <label for="name">Name</label>
                      <div class="mt-2"><p>ex:1ere année</p></div>
                    </div>
                    <div class="modal-footer">
                      <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary bg-primary">Save</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
</div>

{{-- ------------------------------------------------------------ --}}

@endsection