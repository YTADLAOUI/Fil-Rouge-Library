@extends('layouts.principal')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container border p-3 rounded ">

  <div class="col-12 mb-3">
      <p class=" me-2"><b>Ajouter une commentaire</b></p>
      <P><-RETURN</P>
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
        <hr class="my-3">
        <div class="container ">
            <form class="row" wire:submit.prevent="sendText">
                <input wire:model="commentText" type="text" class="col form-control" placeholder="your comment" />
                <button  class="col-2 ms-2 btn btn-light bg-light" type="submit"><i class="bi bi-send text-dark"></i></button>
            </form>
        </div>  
        <div class="container bg-light mt-3">
            <div class="d-flex justify-content-center py-2">
                <div class="second py-2 px-2"> <div><img src="https://images.unsplash.com/photo-1508919801845-fc2ae1bc2a28?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW1nfGVufDB8fDB8fA%3D%3D&w=1000&q=80" width="18" height="18"><span class="text2">Beth</span></div>
                    <div class=" py-1 pt-2">
                        <span class="text1">Type your note, and hit enter to add it</span> 
                        <div><span class="text3 text3o">edit</span><span class="thumbup"></span>
                            <span class="text4 text4i">delete</span></div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
  
@endsection