<div>
    {{-- In work, do what you enjoy. --}}
    <div class="container items-center d-flex justify-content-center justify-content-sm-end ">
      <input class=" form-control form-control-borderless shadow mt-4 me-sm-5 mb-2" wire:model="search" type="search" placeholder="Search here" style="width:43%">
  </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
          @endif
      </div>
    <div class="container pt- table-responsive">
        <table class="table bg-white rounded me-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">Titre</th>
                <th scope="col">DateDePublication</th>
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