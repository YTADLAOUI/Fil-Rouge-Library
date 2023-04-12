@extends('layouts.principal')
@section('content')
<div class="row items-center me-0">
  <h1 class="col fw-bold ms-3 mt-5">Edit Etat d'une Reservation</h1>
</div> 
<div class="d-flex justify-content-center">
  <form action="{{url('branch/'.$reservation->id)}}" method="POST" class="">
    {!!@csrf_field()!!}
    @method("PATCH")
    <div class="form-floating mb-3 ">
      <select  class="form-select" name="categories_id" id="validationCustom04" required>
        <option disabled selected value="{{}}">{{}}</option>
        @foreach()
        <option  value="{{}}">{{}}</option>
        @endforeach
      </select> 
    </div>
    <div class="d-flex justify-content-center"> 
      <button  class="btn btn-secondary me-3">return</button>
      <button type="submit" class="btn btn-warning ">Update</button>
    </div>
  </form>
</div>
@endsection