@extends('layouts.principal')
@section('content')
<div class="row items-center me-0">
  <h1 class="col fw-bold ms-3 mt-5">Edit class</h1>
</div> 
<div class="row justify-content-center" >
    <form action="{{url('class/'.$class->id)}}" method="POST" class="col-sm-6">
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
        <div class="d-flex justify-content-center"> 
          <button type="submit" class="btn btn-warning mt-3 bg-warning">Update</button>
        </div>
      </div>
    </form>
</div>
@endsection