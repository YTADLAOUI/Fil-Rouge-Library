@extends('layouts.principal')
@section('content')
<div class="row items-center me-0">
  <h1 class="col fw-bold ms-3 mt-5">Your products</h1>
  {{-- <button type="button" class="col-4 me-5 mt-5 btn btn-dark w-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><b>+ </b> Add Product</button> --}}
  <button class="col-4 me-5 mt-5 btn btn-dark w-auto" href="#modal-meal" data-bs-toggle="modal"data-bs-target="#exampleModal"><b>+ </b> Add Product</button>
  </div>
  <div class="container pt-5 table-responsive">

          <table class="table table-responsive bg-white rounded me-5">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Image</th>
                  <th scope="col">Autor</th>
                  <th scope="col">Descriptio</th>
                  <th scope="col">Date</th>
                  <th scope="col">Category</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td>1</td>
                  <td>test</td>
                  <td>test</td>
                  <td><img class="rounded" src="{{asset('/images/22.svg')}}" width="100" height="60"></td>
                  <td><span class="d-inline-block text-truncate" style="max-width: 150px;">test</span></td>
                  <td>test</td>
                  <td>test</td>
                  <td><a href="{{ url('edit') }}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                  <td><a href="" class="text-decoration-none text-danger fw-bold">delete</a></td>
                </tr>
              </tbody>
          </table> 
  </div>

{{-- <-------modal----------> --}}



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form>
<div class="mb-3">
  <label for="recipient-name" class="col-form-label">Recipient:</label>
  <input type="text" class="form-control" id="recipient-name">
</div>
<div class="mb-3">
  <label for="message-text" class="col-form-label">Message:</label>
  <textarea class="form-control" id="message-text"></textarea>
</div>
</form>
</div>
<div class="modal-footer">
<button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<button  class="btn btn-primary">Send message</button>
</div>
</div>
</div>
</div>
{{-- ------------------------------------------------------------ --}}
<div class="row items-center me-0">
  <h1 class="col fw-bold ms-3 mt-5">Your Users</h1>
  {{-- <button type="button" class="col-4 me-5 mt-5 btn btn-dark w-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><b>+ </b> Add Product</button> --}}
  <button class="col-4 me-5 mt-5 btn btn-dark w-auto" href="#modal-meal" data-bs-toggle="modal"data-bs-target="#exampleModal"><b>+ </b> Add user</button>
  </div>
  <div class="container pt-5 table-responsive">

          <table class="table table-responsive bg-white rounded me-5">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Image</th>
                  <th scope="col">Autor</th>
                  <th scope="col">Descriptio</th>
                  <th scope="col">Date</th>
                  <th scope="col">Category</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td>1</td>
                  <td>test</td>
                  <td>test</td>
                  <td><img class="rounded" src="{{asset('/images/22.svg')}}" width="100" height="60"></td>
                  <td><span class="d-inline-block text-truncate" style="max-width: 150px;">test</span></td>
                  <td>test</td>
                  <td>test</td>
                  <td><a href="{{ url('edit') }}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                  <td><a href="" class="text-decoration-none text-danger fw-bold">delete</a></td>
                </tr>
              </tbody>
          </table> 
  </div>

{{-- <-------modal----------> --}}



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">New user</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form method="POST" action="{{ route('addUsers') }}" >
                       @csrf
                        <div class="form-floating mb-3 ">
                          <input type="text" class="form-control" name="name" id="name" placeholder="name" required>
                          <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                          <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                          <label for="password">Password</label>
                        </div>
                      <div class="form-floating">
                      <div><label for="validationFormCheck3">Role</label></div> 
                        <div class="form-check"id='inputAdmin'>
                          <input type="radio" class="form-check-input" value="1" id="admin" name="id_role" required>
                          <label class="form-check-label"  for="admin">Admin</label>
                        </div>
                        <div class="form-check mb-3" id='inputEtudiant' >
                          <input type="radio" class="form-check-input" id="etudiant"  name="id_role" value="2" required>
                          <label class="form-check-label" for="etudiant" >Etudient</label>
                          <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>
                        </div>
                        <div class='gg' id='container2'>
                          <div class="form-floating mb-3">
                            <select class="form-select" name="id_cumpus" id="validationCustom04" required>
                              <option selected disabled value="">Choose...</option>
                              <option>Youssoufia</option>
                              <option>safi</option>
                            </select>  
                            <label for="validationCustom04" class="form-label">Cumpus</label>
                          </div>
                        </div>
                <div class="gg" id='container1'>
                  <div class="form-floating mb-3">
                    <select class="form-select" name="id_cumpus" id="validationCustom04" required>
                      <option selected disabled value="">Choose...</option>
                      <option>Youssoufia</option>
                      <option>safi</option>
                    </select>  
                    <label for="validationCustom04" class="form-label">Cumpus</label>
                  </div>
                  <div class="form-floating mb-3">
                    <select class="form-select" name="promo_id" id="validationCustom04" required>
                      <option selected disabled value="">Choose...</option>
                      <option>1er année</option>
                      <option>2éme année</option>
                    </select>  
                    <label for="validationCustom04" class="form-label">Promo</label>
                  </div>
                  <div class="form-floating mb-3">
                    <select class="form-select" name="branche_id" id="validationCustom04" required>
                      <option selected disabled value="">Choose...</option>
                      <option>...</option>
                      <option>...</option>
                      <option>...</option>
                      <option value="1">Youssef</option>
                    </select>  
                    <label for="validationCustom04" class="form-label">Branche</label>
                  </div>
                    <div class="form-floating mb-3">
                      <select class="form-select" name="id_groupes" id="validationCustom04" required>
                        <option selected disabled value="null">Choose...</option>
                        <div>
                        <option>groupe1</option>
                        <option>groupe2</option>
                        <option>groupe3</option>
                      </div>
                      <div>
                        <option>groupe1</option>
                        <option>groupe2</option>
                        <option>groupe3</option>
                      </div>
                        
                        <option value="1">Youssef</option>
                      </select>  
                      <label for="validationCustom04" class="form-label">Groupe</label>
                    </div>
                    
                  </div>
                  
                    <button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send message</button>
                  </form>
        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>
</div>
@endsection