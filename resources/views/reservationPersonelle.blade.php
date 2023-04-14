@extends('layouts.principal')
@section('content')
     <!-- // Minimal statistics section end -->
  <div class="border p-3 rounded m-3">
     <div class="row items-center me-0">
      <h1 class="col fw-bold ms-3 mt-5">Your Livre</h1>
      </div>
      <div class="container pt-5 table-responsive">
              <table class="table rounded me-5">
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
    </div>
@endsection