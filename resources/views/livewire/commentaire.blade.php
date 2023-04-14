<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <hr class="my-3">
        <div class="container ">
            <form class="row" wire:submit.prevent="store">
                <input wire:model="commentaire" type="text" class="col form-control" placeholder="your comment" />
                <button  class="col-2 ms-2 btn btn-light bg-light" type="submit"><i class="bi bi-send text-dark"></i></button>
            </form>
            @if (session('alert'))
                <small class="ms-1 text-danger">{{session('alert')}}</small>
            @endif
        </div>  
        <div>
@livewireScripts