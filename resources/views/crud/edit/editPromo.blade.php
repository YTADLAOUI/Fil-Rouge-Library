@extends('layouts.principal')
@section('content')
<div class="row items-center me-0">
  <h1 class="col fw-bold ms-3 mt-5 mb-3">Edit Promo</h1>
  {{-- <a class ="ms-3 fw-bold" href="{{url('/promo')}}"><- Return</a> --}}
</div> 
<div class="row justify-content-center mt-5">
  {{-- <div class="col-sm-3"></div> --}}
      <div class="col-sm-6">
        <form action="{{url('branch/'.$promo->id)}}" method="POST" class="">
          {!!@csrf_field()!!}
          @method("PATCH")
          <div class="form-floating mb-3 ">
            <input type="text" value='{{$promo->nom}}' class="form-control" name="nom" id="name" placeholder="name" required>
            <label for="name" >Name</label>
            <div class="mt-4"><p>ex:1ere année</p></div>
            <div class="d-flex justify-content-center"> 
              <button type="submit" class="btn btn-warning bg-warning">Update</button>
            </div>
          </div>
        </form>
    </div>
</div>
@endsection