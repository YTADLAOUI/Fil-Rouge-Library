@extends('layouts.principal')
@section('content')
<div class="row items-center me-0">
  <h1 class="col fw-bold ms-3 mt-5">Edit User</h1>
</div> 
<div class="d-flex justify-content-center">
  <form method="POST" action="{{url('register/'.$user->id)}}" enctype="multipart/form-data">
    {!!@csrf_field()!!}
    @method("PATCH")
    <div style="width: 80%">
        <div class="form-floating mb-3 ">
          <input type="text" value="{{$user->name}}" class="form-control" name="name" id="name" placeholder="name" required >
          <label for="name">Name</label>
          <div>
            @error('name')
            <span style="color:rgb(247, 74, 74)">
              {{$message}}
            </span>
            @enderror
          </div>
        </div>
        <div class="form-floating mb-3">
          <input type="email" value="{{$user->email}}" class="form-control" name="email" id="email" placeholder="email" required>
          <label for="email">Email</label>
          <div>
            @error('email')
            <span style="color:rgb(247, 74, 74)">
              {{$message}}
            </span>
            @enderror
          </div>
        </div>
        <div class="form-floating mb-3">
          <input type="password" name="password" autocomplete="off" class="form-control" id="password" placeholder="Password" >
          <label for="password">Password</label>
        </div>
        <div class=" mb-3 d-flex flex-column">
          <label for="avatar">Choose a profile picture:</label>
          <input type="file"id="avatar" name="profile_photo_path">
        </div>
          <div class="form-floating">
            <div><label for="validationFormCheck3">Role</label></div> 
            <div class="form-check"id='inputAdmin'>
                <input type="radio" class="form-check-input" value="1" id="admin" name="role_id" required>
                <label class="form-check-label"  for="admin">Admin</label>
              </div>
            <div class="form-check mb-3" id='inputEtudiant' >
              <input type="radio" class="form-check-input" id="etudiant"  name="role_id" value="2" required>
              <label class="form-check-label" for="etudiant" >Etudient</label>
              <div class="invalid-feedback">More example invalid feedback text</div>
            </div>
              <div>
                @error('role_id')
                <span style="color:rgb(247, 74, 74)">
                  {{$message}}
                </span>
                @enderror
              </div>
          </div>
        <div class="form-floating mb-3" id="container1">
          <select class="form-select" id="videinput" name="groupe_id" id="validationCustom04" required>
            <option selected disabled value="null">Choose...</option>
            @foreach ($groupes as $groupe)
            <option value="{{$groupe->id}}">{{$groupe->nom}}</option>
            @endforeach
          </select> 
              <div>
                @error('groupe_id')
                  <span style="color:rgb(247, 74, 74)">
                    {{$message}}
                  </span>
                @enderror
              </div> 
          <label for="validationCustom04" class="form-label">Groupe</label>
        </div>
      </div>
        <div class="d-flex justify-content-center"> 
          <button  class="btn btn-secondary me-3">return</button>
          <button type="submit" class="btn btn-warning ">Update</button>
        </div>
   
  </form>
</div>
@endsection
