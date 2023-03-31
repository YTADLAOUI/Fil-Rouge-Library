@extends('layouts.principal')
@section('content')
<form action="{{url('branch/'.$promo->id)}}" method="POST" class="">
  {!!@csrf_field()!!}
  @method("PATCH")
  <div class="form-floating mb-3 ">
    
    <input type="text" value='{{$promo->nom}}' class="form-control" name="nom" id="name" placeholder="name" required>
    <label for="name" >Name</label>
    <div class="mt-2"><p>ex:1ere année</p></div>
    <button class="btn-btn-primary">update</button>
  </div>
  
</form>
@endsection