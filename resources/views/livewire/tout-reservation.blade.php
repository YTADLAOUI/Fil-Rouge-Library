<div>
    {{-- Stop trying to control. --}}
    <div class="col-9 col-sm-5 form-outline mb-4">
      <input id="search-focus" class=" form-control form-control-borderless shadow mt-4 mb-2  rounded-pill" wire:model="search" type="search" placeholder="recherche par NomDeUser">
    </div>
      {{-- <div class="col-sm-7"></div> --}}
    <div class="container  pt-5 table-responsive">
        <table class="table bg-light rounded me-5">
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
             
                  <tr >
                    <input type="hidden" name="" id='hiddenput{{$key}}' value="{{$reservation->id}}">
                    <td>{{$key+1}}</td>
                <td><img class="rounded" src="{{asset("images/".$reservation->users->profile_photo_path)}}" width="50" height="60"></td>
                    <td class="text-center">{{$reservation->users->name}}</td>
                    <td class="text-center">{{$reservation->livres->titre}}</td>
                    <td class="text-center">{{$reservation->dateReservation}}</td>
                    <td class="text-center">
                      {{$reservation->dateEmprunt}}
                    </td>
                    <td class="text-center">{{$reservation->datePreuveReturn}}</td>
                    <td class="text-center">{{$reservation->dateDeReturn}}</td>
                    <td class="text-center">{{$reservation->livres->quantite_calcul}}</td>
                    <td class="text-center">{{$reservation->livres->categories->nom}}</td>
                    <td style="padding: 12px;
                    margin-top: 10PX;" class="d-flex justify-content-center @if($reservation->status=='en attendant') badge bg-primary text-light @elseif($reservation->status=='valide') badge bg-success text-light @elseif($reservation->status=='emprunt') badge bg-danger text-light @else badge bg-info text-dark @endif ">{{$reservation->status}}</td>
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