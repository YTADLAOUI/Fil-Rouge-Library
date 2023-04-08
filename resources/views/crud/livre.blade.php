@extends('layouts.principal')
@section('content')
<div class="row items-center me-0">
  <h1 class="col fw-bold ms-3 mt-5">Class</h1>
  {{-- <button type="button" class="col-4 me-5 mt-5 btn btn-dark w-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><b>+ </b> Add Product</button> --}}
  <button class="col-4 me-5 mt-5 btn btn-dark w-auto" href="#modal-meal" data-bs-toggle="modal"data-bs-target="#exampleModal3"><b>+ </b> Add Product</button>
  </div>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class="container pt-5 table-responsive">

          <table class="table table-responsive rounded me-5">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">image</th>
                  <th scope="col">Titre</th>
                  <th scope="col">Date de pub</th>
                  <th scope="col">Quantite</th>
                  <th scope="col">Categorie</th>
                  <th scope="col">Auteur</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($livres as $key=>$livre)
                    <tr>
                      <td>{{$key+1}}</td>
                  <td><img class="rounded" src="{{asset("images/".$livre->image)}}" width="50" height="60"></td>
                      <td>{{$livre->titre}}</td>
                      <td>{{$livre->datePublication}}</td>
                      <td>{{$livre->quantite_total}}</td>
                      <td>{{$livre->categories->nom}}</td>
                      <td>{{$livre->auteurs->nom}}</td>
                      <td><a href="{{ url('livre/'.$livre->id.'/edit') }}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                      <td>
                        <form action={{"livre/".$livre->id}} method="POST">
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
<h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form action="livre" method="POST" enctype="multipart/form-data">
  @csrf
<div class="form-floating mb-3 ">
  <input type="text" class="form-control" name="titre" id="name" placeholder="Titre" required>
  <label for="name">Titre</label>
</div>
<div class="form-floating mb-3 ">
  <input type="number" class="form-control" name="quantite_total" id="quantite" placeholder="Quantite" required>
  <label for="quantite">Quantite</label>
</div>
<div class="form-floating mb-3 ">
  <input type="hidden" class="form-control" name="quantite_calcul" id="quantite" value='3' placeholder="Quantite" required>
  <label for="quantite">Quantite</label>
</div>

<div class="form-floating mb-3 ">
  <input type="date" class="form-control" name="datePublication" id="date_publication" placeholder="datePublication" required>
  <label for="date_publication">Date publication</label>
</div>
<div class=" mb-3">
  <label for="avatar">Choose a profile picture:</label>
  <input type="file"id="avatar" name="image">
</div>
<div class="form-floating mb-3">
  <select class="form-select" name="categories_id" id="validationCustom04" required>
    <option selected disabled value="">Choose...</option>
    @foreach($categories as $categorie)
    <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
    @endforeach
  </select>  
  <label for="validationCustom04" class="form-label">Categories</label>
</div>
<div class="form-floating mb-3">
  <select class="form-select" name="auteure_id" id="validationCustom04" required>
    <option selected disabled value="">Choose...</option>
    @foreach($auteurs as $auteur)
    <option value="{{$auteur->id}}">{{$auteur->nom}}</option>
    @endforeach
  </select>  
  <label for="validationCustom04" class="form-label">Auteur</label>
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