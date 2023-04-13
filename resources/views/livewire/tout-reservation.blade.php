<div>
    {{-- Stop trying to control. --}}
    <div class="container items-center d-flex justify-content-center justify-content-sm-end ">
        <input class=" form-control form-control-borderless shadow mt-4 me-sm-5 mb-2" wire:model="search" type="search" placeholder="Search here" style="width:43%">
    </div>
    <div class="container pt-5 table-responsive">
        <table class="table bg-white rounded me-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">imgUser</th>
                <th scope="col">NomDeUser</th>
                <th scope="col">TitreDeLivre</th>
                <th scope="col">DateDeReservation</th>
                <th scope="col">DateDeEmprunt</th>
                <th scope="col">DatePreuveDeReteur</th>
                <th scope="col">DateDeReteur</th>
                <th scope="col">QuantiteRestent</th>
                <th scope="col">CategorieDeLivre</th>
                <th scope="col">statusDeReservation</th>
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
                    <input type="hidden" name="" id='hiddenput{{$key}}' value="{{$reservation->id}}">
                    <td>{{$key+1}}</td>
                <td><img class="rounded" src="{{asset("images/".$reservation->users->profile_photo_path)}}" width="50" height="60"></td>
                    <td>{{$reservation->users->name}}</td>
                    <td>{{$reservation->livres->titre}}</td>
                    <td>{{$reservation->dateReservation}}</td>
                    <td>
                      {{$reservation->dateEmprunt}}
                    </td>
                    <td>{{$reservation->datePreuveReturn}}</td>
                    <td>{{$reservation->dateDeReturn}}</td>
                    <td>{{$reservation->livres->quantite_calcul}}</td>
                    <td>{{$reservation->livres->categories->nom}}</td>
                    <td class="text-danger" >{{$reservation->status}}</td>
                    <td><button href="#modal-meal" data-bs-toggle="modal"data-bs-target="#exampleModal" id="edit"  class="text-decoration-none text-primary fw-bold" onclick="idrecupere(event)">edit</button></td>
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


@livewireScripts