@extends('layouts.principal')
@section('content')
<div class="row items-center me-0">
  <h1 class="col fw-bold ms-3 mt-5">Edit Promo</h1>
</div> 
<div class="d-flex justify-content-center">
  <form action="{{url('branch/'.$promo->id)}}" method="POST" class="">
    {!!@csrf_field()!!}
    @method("PATCH")
    <div class="form-floating mb-3 ">
      <input type="text" value='{{$promo->nom}}' class="form-control" name="nom" id="name" placeholder="name" required>
      <label for="name" >Name</label>
      <div class="mt-2"><p>ex:1ere année</p></div>
      <div class="d-flex justify-content-center"> 
        <button  class="btn btn-secondary me-3">return</button>
        <button type="submit" class="btn btn-warning ">Update</button>
      </div>
    </div>
  </form>
</div>
@endsection