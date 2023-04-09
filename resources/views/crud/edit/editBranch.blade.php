@extends('layouts.principal')
@section('content')
<div class="row items-center me-0">
  <h1 class="col fw-bold ms-3 mt-5">Edit Branch</h1>
</div> 
<div class="d-flex justify-content-center" >
  <form action="{{url('branch/'.$branches->id)}}" method="POST" class="">
    {!!@csrf_field()!!}
    @method("PATCH")
    <div class="form-floating mb-3 ">
      
      <input type="text" value='{{$branches->nom}}' class="form-control" name="nom" id="name" placeholder="name" required>
      <label for="name" >Name</label>
      <select class="form-select" name="promo_id" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        @foreach($promos as $promo)
        <option value="{{$promo->id}}">{{$promo->nom}}</option>
        @endforeach
      </select>  
      <div class="d-flex justify-content-center"> 
        <button  class="btn btn-secondary me-3">return</button>
        <button type="submit" class="btn btn-warning ">Update</button>
      </div>
    </div>
    
  </form>
</div>
@endsection