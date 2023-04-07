@extends('layouts.principal')
@section('content')
<form action="{{url('categorie/'.$categorie->id)}}" method="POST" class="">
  {!!@csrf_field()!!}
  @method("PATCH")
  <div class="form-floating mb-3 ">
    <input type="text" value='{{$categorie->nom}}' class="form-control" name="nom" id="name" placeholder="name" required>
    <label for="name" >Name</label>
    <button class="btn-btn-primary">update</button>
  </div>
</form>
@endsection