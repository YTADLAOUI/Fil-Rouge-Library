<div>
    {{-- The Master doesn't talk, he acts. --}}
    <section class="row w-100 ">
      @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @elseif(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
  </div>
        
    @endif
    <div class="container items-center col-12 col-sm-6 justify-content-sm-end  w-sm-50">
      <input class=" form-control form-control-borderless shadow mt-4 rounded-pill mb-2" wire:model="search" type="search" placeholder="recherche par Titre">
    </div>
      <div class="col-sm-6"></div>
        @foreach ($livres as $livre)
        <diV class="d-flex justify-content-center col-md-4 me-0">
            <div class="card mt-3 " style="width: 18rem; ">
                        <div style="background-image:url({{"images/".$livre->image}}); background-position: center;
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
                <div>
                  <div class="d-flex justify-content-between mt-3">
                    
                      <div>
                        @if( $livre->quantite_calcul>=1)
                          <form action="{{url('reservation/'.$livre->id)}}" method="POST">
                            @csrf
                            
                            <button type="submit"  class="btn btn-primary bg-primary" >réserver</button>
                          </form>
                          {{-- <a href="{{route('test.reservation',$livre->id)}}" class="text-light">hhhhhh</a> --}}
                        @endif
                      </div>
                      <div class="d-flex justify-content-center">
                       <a href={{url("bibli/".$livre->id)}}> <button  type="" class="btn btn-info text-light">show</button></a>
                      </div> 
                  </div> 
                </div>
              </div>
            </div>
        </div>
        @endforeach  
        <div class="container text-dark mt-2">
          {{$livres->links()}}
      </div>
      </section>
      @livewireScripts
</div>
