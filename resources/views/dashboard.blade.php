@extends('layouts.principal')
@section('content')
          <div class="container ">
            <!-- Minimal statistics section start -->
            <div class="row ">
                <div class="col-12 mt-3 mb-3">
                <h4 class="text-uppercase">Statistics</h4>
                </div>
            </div>

            <div class="row justify-content-center" style="width: 90%">
                <div class="col-md-3 col-xl-2 col-sm-10 col-12 me-3 ">
                    <div class="card row">
                        <div class="text-center">
                            <i class="bi bi-list-ul"></i>
                            <h3>156</h3>
                            <p>Comments</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xl-2 col-sm-10 col-12 me-3">
                    <div class="card row">
                        <div class="text-center">
                            <i class="bi bi-list-ul"></i>
                            <h3>156</h3>
                            <p>Comments</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xl-2 col-sm-10 col-12 me-3">
                    <div class="card row">
                        <div class="text-center">
                            <i class="bi bi-list-ul"></i>
                            <h3>156</h3>
                            <p>Comments</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xl-2 col-sm-10 col-12 m-1">
                    <div class="card row">
                        <div class="text-center">
                            <i class="bi bi-list-ul"></i>
                            <h3>156</h3>
                            <p>Comments</p>
                        </div>
                    </div>
                </div>
        </div>
        <!-- // Minimal statistics section end -->
        <div class="row col-12 mt-5 mb-3">
          <h4 class="text-uppercase">tout les Reservations</h4>
        </div>
            @livewire('tout-reservation')
    {{-- ------------------------------------------------------------- --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
          suivre l'etat de livre
          </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           <form id="formstatus" method="POST" class="">
            @csrf
            @method("PATCH")
             <div class="form-floating mb-3 ">
              <select class="form-select" name="status" id="opt" required>
                <option disabled selected id="opt" ></option>
                <option value="en attendant">En attendant</option>
                <option value="valide">Valide</option>
                <option value="emprunt">Emprunt</option>
                <option  value="return">Return</option>
              </select> 
              <label for="opt">Status*</label>
            </div> 
            <div class="form-floating mb-3 ">
              <input type="date" id="emprunt" class="form-control" name="dateEmprunt" placeholder="datePublication" >
              <label for="emprunt">DateDeEmprunt</label>
            </div>
            <div class="form-floating mb-3 ">
              <input type="date" class="form-control" name="datePreuveReturn" id="Preuve" placeholder="datePreuveReturn" >
              <label for="Preuve">DatePreuveDeReteur</label>
            </div>
            <div class="form-floating mb-3 ">
              <input type="date" class="form-control" name="dateDeReturn" id="Return" placeholder="datePreuveReturn" >
              <label for="Return">dateDeReturn</label>
            </div>
            <div class="d-flex justify-content-center"> 
              <button  class="btn btn-secondary me-3">return</button>
              <button type="submit" class="btn btn-warning bg-warning text-light">Update</button>
            </div>
        </form> 
      </div>
    </div>
  </div>
  <script>

    
    function idrecupere(e){
    
   var id= e.target.parentElement.parentElement.querySelector('input').value;
  var url = `{{url('update/${id}')}}`;
  document.querySelector('#formstatus').setAttribute('action', url);
  // Send Ajax request
  $.ajax({
    url:"{{route('status.get')}}",
    type: 'POST',
    data: {
      // Pass the id as data to the server
      id: id,
      _token: "{{ csrf_token() }}"
    },
    success: function(response) {
      // Handle successful response
      // console.log(response.data); // You can do whatever you want with the response data here
      // console.log(document.querySelector('#opt')); 
      document.querySelector('#opt').value=response.data.status;
      document.querySelector('#emprunt').value=response.data.dateEmprunt;
      document.querySelector('#Preuve').value=response.data.datePreuveReturn;
      document.querySelector('#Return').value=response.data.dateDeReturn;
    },
    error: function(xhr, status, error) {
      // Handle error response
      console.error(error); // You can handle the error response here
    }

  });
}
// document.querySelector()

  </script>
</div>
@endsection