@extends('layouts.principal')
@section('content')
<div class="row items-center me-0">
  <h1 class="col fw-bold ms-3 mt-5">Edit Categorie</h1>
</div> 
<div class="row justify-content-center" >
    <form action="{{url('categorie/'.$categorie->id)}}" method="POST" class="col-sm-6 mt-5">
      {!!@csrf_field()!!}
      @method("PATCH")
      <div class="form-floating mb-3 ">
        <input type="text" value='{{$categorie->nom}}' class="form-control" name="nom" id="name" placeholder="name" required>
        <label for="name" >Name</label>
        <div class="d-flex justify-content-center"> 
          <button type="submit" class="btn btn-warning mt-5 bg-warning">Update</button>
        </div>
      </div>
    </form>
</div>
@endsection