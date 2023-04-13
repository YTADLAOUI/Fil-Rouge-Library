@extends('layouts.principal')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container border p-3 rounded ">

  <div class="col-12 mb-3">
      <p class=" me-2"><b>Add your comment</b></p>
  </div>

  <div id="comentScroll"  class="overflow-auto mb-3 p-3 bg-light rounded"style="max-width: 100%; max-height: 20em;">
              <div class="incoming_msg mb-4" >
                      
                  <pre><i class="fa-solid fa-user-large"></i> <b></b></pre>
                  <div class="received_msg mt-1" style="overflow-wrap: break-word;">        
                        <form wire:submit.prevent="">
                            <p>
                              {{-- <textarea wire:model.defer="updateComment">{{$comment->nameComment}}</textarea> --}}
                                <input type="text" wire:model.defer="updateComment." class="p-1 coment-content-input rounded border" >
                                <button class="edit-btn-dark" type="submit"><b class="text-secondary" style="font-size: .8em">Save</b></button>
                            </p>
                        </form>
                    
                        
                        {{-- end of form --}}
                       <span class="text-secondary ms-4" style="font-size: .7em"></span>
                      
                       
                        <span><button wire:click="edit()"><b class="text-secondary" style="font-size: .8em">edit</b></button> 
                          
                          <span><button wire:click="destroy()" onclick="return confirm('Are you sure?')" class="text-secondary " style="font-size: .8em;"><b>delete</b></button></span></span>
                  </div>
              </div>

        

          <div class="incoming_msg mb-4" >
              <pre><i class="fa-solid fa-user-large"></i> <b>hh</b></pre>
              <div class="received_msg mt-1" style="overflow-wrap: break-word;">
                  <p class="my-2 ms-4 text-secondary " >hh</p>
                  <span class="text-secondary ms-4" style="font-size: .7em">hhhhh</span>
                 </div>
@endsection