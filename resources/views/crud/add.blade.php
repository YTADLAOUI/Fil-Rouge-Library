@extends('layouts.principal')
@section('content')
<div class="row items-center me-0">
  
  <h1 class="col fw-bold ms-3 mt-5">Your Users</h1>
  <button class="col-4 me-5 mt-5 btn btn-dark w-auto mb-3" href="#modal-meal" data-bs-toggle="modal"data-bs-target="#exampleModal"><b>+ </b> Add user</button>
</div>
    @livewire('register-livewire')
                          {{-- <-------modal----------> --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">New user</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form method="POST" action='/register' enctype="multipart/form-data">
                       @csrf
                        <div class="form-floating mb-3 ">
                          <input type="text" class="form-control" name="name" id="name" placeholder="name" required >
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
                          <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
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
                          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                          <label for="password">Password</label>
                          <div>
                            @error('password')
                            <span style="color:rgb(247, 74, 74)">
                              {{$message}}
                            </span>
                            @enderror
                          </div>
                        </div>
                        <div class=" mb-3">
                          <label for="avatar">Choose a profile picture:</label>
                          <input type="file"id="avatar" name="profile_photo_path">
                        </div>
                      <div class="form-floating">
                      <div>
                        <label for="validationFormCheck3">Role</label></div> 
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
                    <div class="form-floating mb-3 gg" id="container1">
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
                  <div class="modal-footer">
                    <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary bg-primary">Send</button>
                  </div>

                  </form>
        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>


@endsection