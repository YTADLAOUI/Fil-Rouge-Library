@extends('layouts.principal')
@section('content')
<div class="row items-center me-0">
  <h1 class="col fw-bold ms-3 mt-5">Edit Auteur</h1>
</div> 
<div class="d-flex justify-content-center" >
  <form action="{{url('branch/'.$auteur->id)}}" method="POST" class="">
    {!!@csrf_field()!!}
    @method("PATCH")
    <div class="form-floating mb-3 ">
      <input type="text" value='{{$auteur->nom}}' class="form-control" name="nom" id="name" placeholder="name" required>
      <label for="name" >Name</label>
      <div class="d-flex justify-content-center"> 
        <button  class="btn btn-secondary me-3">return</button>
        <button type="submit" class="btn btn-warning ">Update</button>
      </div>
    </div>
  </form>
</div>
@endsection