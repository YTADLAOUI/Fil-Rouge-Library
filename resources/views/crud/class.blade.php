@extends('layouts.principal')
@section('content')
<div class="row items-center me-0">
  <h1 class="col fw-bold ms-3 mt-5">Class</h1>
  {{-- <button type="button" class="col-4 me-5 mt-5 btn btn-dark w-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><b>+ </b> Add Product</button> --}}
  <button class="col-4 me-5 mt-5 btn btn-dark w-auto" href="#modal-meal" data-bs-toggle="modal"data-bs-target="#exampleModal3"><b>+ </b> Add Product</button>
  </div>
  <div class="container pt-5 table-responsive">

          <table class="table table-responsive rounded me-5">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">branch</th>
                  <th scope="col">promo</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($classes as $class)
                    <tr>
                      <td>1</td>
                      <td>{{$class->nom}}</td>
                      <td>{{$class->branche->nom}}</td>
                      <td>{{$class->branche->promo->nom}}</td>
                      <td><a href="{{ url('class/'.$class->id.'/edit') }}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                      <td>
                        <form action={{"class/".$class->id}} method="POST">
                          @method("DELETE")
                          {!!@csrf_field()!!}
                          <button type="submit" class="text-decoration-none text-danger fw-bold">delete</button>
                        </form>
                      </td>
                    </tr>
                @endforeach
              </tbody>
          </table> 
  </div>

{{-- <-------modal----------> --}}
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form action="class" method="POST">
  @csrf
<div class="form-floating mb-3 ">
  <input type="text" class="form-control" name="nom" id="name" placeholder="name" required>
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
<div class="modal-footer">
  <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Send </button>
  </div>
</form>
</div>

</div>
</div>
</div>
{{-- ------------------------------------------------------------ --}}
@endsection