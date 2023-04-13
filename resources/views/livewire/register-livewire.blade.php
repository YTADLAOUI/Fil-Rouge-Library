<div>
    {{-- Be like water. --}}
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
    <div class="container pt-5 table-responsive">
      <table class="table  bg-white rounded me-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">role</th>
                <th scope="col">class</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
               
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $key=>$user)
              <tr>
                <td>{{$key+1}}</td>
                <td><img class="rounded" src="{{asset("images/".$user->profile_photo_path)}}" width="50" height="60"></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->nom}}</td>
                <td>
                      @if ($user->groupe==null)
                      ____
                      @else
                      {{$user->groupe->nom}}
                      @endif
              </td>
                <td><a href="{{ url('register/'.$user->id.'/edit') }}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                <td> <form action={{"register/".$user->id}} method="POST">
                  @method("DELETE")
                  {!!@csrf_field()!!}
                  <button type="submit" class="text-decoration-none text-danger fw-bold">delete</button>
                </form>
              </tr>
            @endforeach
            </tbody>
        </table> 
        <div class="container text-dark mt-2">
          {{$users->links()}}
      </div>
</div>
</div>
@livewireScripts