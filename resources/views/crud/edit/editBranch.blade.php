@extends('layouts.principal')
@section('content')
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
    <button type="submit" class="btn-btn-primary">update</button>
  </div>
  
</form>
@endsection