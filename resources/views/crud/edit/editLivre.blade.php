@extends('layouts.principal')
@section('content')
<div class="row items-center me-0">
  <h1 class="col fw-bold ms-3 mt-5">Edit Livre</h1>
</div> 
{{-- <div class="card"> --}}
<div class="d-flex justify-content-center" >
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
  <form action="{{url('livre/'.$livre->id)}}" method="POST" enctype="multipart/form-data">
    {!!@csrf_field()!!}
    @method("PATCH")
    <div style="width: 80%">
        <div class="form-floating mb-3 ">
          <input type="text" value="{{$livre->titre}}" class="form-control" name="titre" id="name" placeholder="Titre" required>
          <label for="name">Titre</label>
        </div>
        <div class="form-floating mb-3 ">
          <input type="number" value="{{$livre->quantite_total}}" class="form-control" name="quantite_total" id="quantite" placeholder="Quantite" required>
          <label for="quantite">Quantite</label>
        </div>
        <div class="form-floating mb-3 ">
          <input type="hidden" class="form-control" name="quantite_calcul" id="quantite" value='{{$livre->quantite_total}}' placeholder="Quantite" required>
          <label for="quantite">Quantite</label>
        </div>
  
        <div class="form-floating mb-3 ">
          <input type="date" value="{{$livre->datePublication}}" class="form-control" name="datePublication" id="date_publication" placeholder="datePublication" required>
          <label for="date_publication">Date publication</label>
        </div>
        <div class=" mb-3 d-flex flex-column">
          <label for="avatar">Choose a profile picture:</label>
          <input type="file"id="avatar" name="image">
        </div>
        <div class="form-floating mb-3">
          <select  class="form-select" name="categories_id" id="validationCustom04" required>
            <option disabled selected value="{{$livre->categories_id}}">{{$livre->categories->nom}}</option>
            @foreach($categories as $categorie)
            <option  value="{{$categorie->id}}">{{$categorie->nom}}</option>
            @endforeach
          </select>  
          <label for="validationCustom04" class="form-label">Categories</label>
        </div>
        <div class="form-floating mb-3">
          <select value='3' class="form-select" name="auteure_id" id="validationCustom04" required>
            <option selected disabled value="{{$livre->categorie_id}}">{{$livre->auteurs->nom}}</option>
            @foreach($auteurs as $auteur)
            <option value="{{$auteur->id}}">{{$auteur->nom}}</option>
            @endforeach
          </select>  
          <label for="validationCustom04" class="form-label">Auteur</label>
        </div>
        <div class="d-flex justify-content-center"> 
          <button  class="btn btn-secondary me-3">return</button>
          <button type="submit" class="btn btn-warning ">Update</button>
        </div>
    </div>
  </form>
</div>
@endsection