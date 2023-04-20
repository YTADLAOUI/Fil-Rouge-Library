@extends('layouts.principal')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="border p-3 rounded col-10 col-sm-12">

  <div class="col-12 mb-3">
      <p class=" me-2"><b>Ajouter une commentaire</b></p>
      
  </div>
  <diV class="d-flex justify-content-center me-0">
    <div class="card mt-3 " style="width: 25rem; ">
            <div style="background-image:url({{asset("images/".$livre->image)}}); background-position: center;
                background-size: cover;
                    height:30rem" >
                     @if($livre->quantite_calcul>=1)    
                     <div class='badge bg-success'><h1>disponible</h1> </div> 
                     @else
                     <div class='badge bg-danger'><h1>rupture de stock</h1>
                    </div>
                   @endif
                </div>
    <div class="card-body" style="background-color:#181D31">
      <div class="d-flex justify-content-center">
        <p class="card-title text-light ">
           <b>Titre : {{$livre->titre}}</b> 
        </p>
      </div>
      <div class="CatAu text-light"><p class="card-text "><b>date de publication: {{$livre->datePublication}}</b></p>
      </div>
        <div class="CatAu text-light"><p class="card-text "><b>Categorie: {{$livre->categories->nom}}</b></p>
        </div>
        <div>
          <p class="CatAu card-text text-light">
            <b>Auteur: {{$livre->auteurs->nom}}</b>
          </p>
        </div>
       {{-- comments --}}
       @livewire('commentaire', ['LivreId' => $livre->id])
       {{-- end comments --}}
      </div>
    </div>
</div>
  
@endsection