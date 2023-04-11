<div>
    {{-- In work, do what you enjoy. --}}
    <div class="container items-center">
        <input class="mx-auto form-control form-control-borderless shadow me-1 mb-2" wire:model="search" type="search" placeholder="Search here" style="width: 48.3%">
      </div>
    <div class="container pt-5 table-responsive">
      @if (session('error'))
      <div class="alert alert-danger">
          {{ session('error') }}
      </div>
      @elseif(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
        @endif
    </div>
        <table class="table table-responsive rounded me-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">Titre</th>
                <th scope="col">Date de pub</th>
                <th scope="col">Quantite</th>
                <th scope="col">Categorie</th>
                <th scope="col">Auteur</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($livres as $key=>$livre)
                  <tr>
                    <td>{{$key+1}}</td>
                <td><img class="rounded" src="{{asset("images/".$livre->image)}}" width="50" height="60"></td>
                    <td>{{$livre->titre}}</td>
                    <td>{{$livre->datePublication}}</td>
                    <td>{{$livre->quantite_total}}</td>
                    <td>{{$livre->categories->nom}}</td>
                    <td>{{$livre->auteurs->nom}}</td>
                    <td><a href="{{ url('livre/'.$livre->id.'/edit') }}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                    <td>
                      <form action={{"livre/".$livre->id}} method="POST">
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
          {{$livres->links()}}
      </div>
</div>
</div>
@livewireScripts