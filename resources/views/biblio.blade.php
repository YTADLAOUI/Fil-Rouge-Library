@extends('layouts.principal')
@section('content')
<section class="row w-100 ">
  @foreach ($livres as $livre)
  <diV class="d-flex justify-content-center col-md-4 me-0">
      <div class="card mt-3 " style="width: 18rem; ">
                  <div style="background-image:url({{"images/".$livre->image}}); background-position: center;
                  background-size: cover;
                      height:200px" >
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
          <div>
            <div class="d-flex justify-content-between mt-3">
                <div>
                  @if( $livre->quantite_calcul>=1)
                    <form action="">
                      <button  class="btn btn-primary" >réserver</button>
                    </form>
                  @endif
                </div>
                <div class="d-flex justify-content-center">
                  <button type="" class="btn btn-info"><i class="bi bi-eye me-1"></i>show</button>
                </div> 
            </div> 
          </div>
        </div>
      </div>
  </div>
  @endforeach  
</section>
@endsection