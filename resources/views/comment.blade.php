@extends('layouts.principal')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<section class="content-item mt-3 " id="comments">
  <div class="container ">
    <div class='d-flex justify-content-center '>
      <div>
        <div class="mt-3" style="width: 18rem;">
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
          <div class="" style="background-color:#181D31">
            <h3 class="text-justify text-light"> <b>Titre : {{$livre->titre}}</b></h3>
          <p class="text-justify text-light mt-3"><b>Categorie: {{$livre->categories->nom}}</b></p>
          <p class="text-justify text-light mt-3 mb-3"><b>Auteur: {{$livre->auteurs->nom}}</b></p>
          </div>
        </div>
    </div> 
  </div>  
  <hr>
    	<div class="row justify-content-center ">
            <div class="col-md-8 ">   
                {{-- <form> --}}
                	<h3 class="pull-left flex-column">New Comment</h3>
                	<button type="submit" id="save" onclick="saveComments({{$livre->id}})" class="btn btn-normal pull-right me-5">Submit</button>
                    <fieldset>
                        <div class="row">
                            <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                <textarea class="form-control" id="message" placeholder="Your message" required=""></textarea>
                            </div>
                        </div>  	
                    </fieldset>
                {{-- </form> --}}
                
                <h3 class="mt-3">Comments</h3>
                
                <!-- COMMENT 1 - START -->
            <div class="mt-3">
                <div>
                  {{-- @foreach ($commentaires as $item) --}}
                  {{-- <div>
                  <a class="pull-left"href="#"><img class="rounded-circle me-3" style="width:80px" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
                </div>
                <div class="media">
                    <div class="media-body">
                        <h4 class="media-heading">{{$item->users->name}}</h4>
                        <div class="ms-2">
                          <p class=''>{{$item->content}}</p></div> 
                        <ul class="list-unstyled list-inline media-detail pull-left">
                            <li><i class="fa fa-calendar me-1"></i>27/02/2014</li>
                        </ul>
                        <ul class="list-unstyled list-inline media-detail pull-right">
                            <li class="fa fa-pencil-square-o"><a href=""></a></li>
                            <li class="fa fa-trash-o"><a href=""></a></li>
                        </ul>
                    </div>
                </div>
              </div> --}}
                {{-- @endforeach --}}
              </div>
                <!-- COMMENT 1 - END -->
            </div>
    </div>
  </div>
</section>
@endsection