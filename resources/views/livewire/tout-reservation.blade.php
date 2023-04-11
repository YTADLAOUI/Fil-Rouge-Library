<div>
    {{-- Stop trying to control. --}}
    <div class="container items-center">
        <input class="mx-auto form-control form-control-borderless shadow me-1 mb-2" wire:model="search" type="search" placeholder="Search here" style="width: 48.3%">
      </div>
    <div class="container pt-5 table-responsive">
        <table class="table table-responsive rounded me-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">imgUser</th>
                <th scope="col">Nom</th>
                <th scope="col">Titre de livre</th>
                <th scope="col">Date de reservation</th>
                <th scope="col">Date de emprunt</th>
                <th scope="col">Date preuve de reteur</th>
                <th scope="col">Date de routeur</th>
                <th scope="col">Quantite restent</th>
                <th scope="col">Categorie</th>
                <th scope="col">status</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($reservations as $key=>$reservation)
              {{-- @php
                  dd($reservation);
              @endphp --}}
                  <tr>
                    <td>{{$key+1}}</td>
                <td><img class="rounded" src="{{asset("images/".$reservation->users->profile_photo_path)}}" width="50" height="60"></td>
                    <td>{{$reservation->users->name}}</td>
                    <td>{{$reservation->livres->titre}}</td>
                    <td>{{$reservation->dateReservation}}</td>
                    <td>{{$reservation->dateEmprunt}}</td>
                    <td>{{$reservation->datePreuveReturn}}</td>
                    <td>{{$reservation->dateDeReturn}}</td>
                    <td>{{$reservation->livres->categories->nom}}</td>
                    <td>{{$reservation->status}}</td>
                    <td><a href="{{ url('resrvation/'.$reservation->id.'/edit') }}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                    <td>
                      <form action={{"reservationsTotal/".$reservation->id}} method="POST">
                        @method("DELETE")
                        {!!@csrf_field()!!}
                        <button type="submit" class="text-decoration-none text-danger fw-bold">delete</button>
                      </form>
                    </td>
                  </tr>
              @endforeach
            </tbody>
        </table> 
        <div class="container text-dark mt-2">
            {{$reservations->links()}}
        </div>
</div>
</div>
