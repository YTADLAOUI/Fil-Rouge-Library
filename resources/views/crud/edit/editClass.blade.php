@extends('layouts.principal')
@section('content')
<form action="{{url('class/'.$class->id)}}" method="POST" class="">
  {!!@csrf_field()!!}
  @method("PATCH")
  <div class="form-floating mb-3 ">
    <div class="form-floating mb-3 ">
      <input type="text" value="{{$class->nom}}" class="form-control" name="nom" id="name" placeholder="name" required>
      <label for="name">Name</label>
    </div>
    <div class="form-floating mb-3">
      <select class="form-select" name="promo_id" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        @foreach($promos as $promo)
          <option value="{{$promo->id}}">{{$promo->nom}}</option>
        @endforeach
      </select>  
      <label for="validationCustom04" class="form-label">Promo</label>
    </div>
    <div class="form-floating mb-3">
      <select class="form-select" name="branche_id" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        @foreach($branches as $branch)
        <option value="{{$branch->id}}">{{$branch->nom}}</option>
        @endforeach
      </select>  
      <label for="validationCustom04" class="form-label">Promo</label>
    </div>
    <button type="submit" class="btn-btn-primary">update</button>
  </div>
</form>
@endsection