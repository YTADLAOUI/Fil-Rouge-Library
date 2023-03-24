@extends('layouts.principal')
@section('content')

<div class="d-flex justify-content-center m-5 ">
    <form method="POST" action="{{ route('addUsers') }}" class="w-75">
        @csrf

        <div class="form-floating mb-3 ">
          <input type="text" class="form-control" name="name" id="name" placeholder="name" required>
          <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
          <label for="email">Email</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <div class="form-floating">
        <div><label for="validationFormCheck3">Role</label></div> 
          <div class="form-check">
            <input type="radio" class="form-check-input" value="1" id="validationFormCheck2" name="id_role" required>
            <label class="form-check-label"  for="validationFormCheck2">Admin</label>
          </div>
          <div class="form-check mb-3">
            <input type="radio" class="form-check-input" id="validationFormCheck3"  name="id_role" value="2" required>
            <label class="form-check-label" for="validationFormCheck3">Etudient</label>
            <div class="invalid-feedback">More example invalid feedback text</div>
          </div>
        </div>
        <div class="form-floating mb-3">
          <select class="form-select" name="id_groupes" id="validationCustom04" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
            <option>...</option>
            <option>...</option>
            <option value="1">Youssef</option>
          </select>  
          <label for="validationCustom04" class="form-label">Groupe</label>
        </div>
        <div class="d-flex justify-content-center"><input type="submit" value="save" class="btn btn-success btsave"></div>
    </form>
</div>
@endsection