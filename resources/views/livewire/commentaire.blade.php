<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <hr class="my-3">
        <div class="container ">
            <form class="row" wire:submit.prevent="store">
                <input wire:model="commentaire" type="text" class="col form-control rounded-pill" placeholder="commentaire" />
                <button  class="col-2 ms-2 btn btn-light bg-light rounded-pill" type="submit"><i class="bi bi-send text-dark"></i></button>
            </form>
            @if (session('alert'))
                <small class="ms-1 text-danger">{{session('alert')}}</small>
            @endif
        </div>  
        <div style="max-width: 100%; max-height: 30em;" class="overflow-auto mb-3 p-3 bg-light rounded mt-3" >
            @foreach ($commentaires as $commentaire)
            <div class="container bg-light " >
                <div class="d-flex py-2">
                    <div class="second py-2 px-2 w-100"> 
                        <div class="d-flex">
                            <img class="rounded me-2" src="{{asset("images/".$commentaire->users->profile_photo_path)}}" width="30" height="40">

                            <span  class="">{{$commentaire->users->name}}</span>
                        </div>
                            
                        <div  class="border p-3 rounded mt-4 ">
                            <span id="commentaire-{{$commentaire->id}}" class="text1  ">{{$commentaire->content}}</span> 
                        </div>
                        <form id="form-{{$commentaire->id}}" class="d-none "  wire:submit.prevent="update({{$commentaire->id}})">
                            <p>
                                <input  id="input-{{$commentaire->id}}" type="text" wire:model.defer="updatecommentaire" class="p-1  rounded-pill m-2" value="">
                                <button class="edit-btn-dark" type="submit"><b class="text-secondary" style="font-size: .8em">Save</b></button>
                            </p>
                        </form>
                        <div class="mt-2">
                             @if($commentaire->etudiant_id==auth()->user()->id)
                            <div><button onclick="show('{{ $commentaire->id }}', 1)" class="text3 text3o"><i class="bi bi-pen"></i></button><span class="thumbup"></span>
                                <button wire:click="destroy({{$commentaire->id}})" class="text4 text4i  text-decoration-none "><i class="bi bi-trash3 text-danger ms-2"></i></button></div>
                            @endif</div>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
        </div>
</div>

@livewireScripts