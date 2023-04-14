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
        @foreach ($commentaires as $commentaire)
        <div class="container bg-light mt-3">
            <div class="d-flex py-2">
                <div class="second py-2 px-2"> <div><img src="https://images.unsplash.com/photo-1508919801845-fc2ae1bc2a28?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW1nfGVufDB8fDB8fA%3D%3D&w=1000&q=80" width="18" height="18"><span class="text2">{{$commentaire->users->name}}</span></div>
                <form id="form-{{$commentaire->id}}" class="d-none"  wire:submit.prevent="update({{$commentaire->id}})">
                    <p>
                        <input id="input-{{$commentaire->id}}" type="text" wire:model.defer="updatecommentaire" class="p-1 coment-content-input rounded border" value="">
                        <button class="edit-btn-dark" type="submit"><b class="text-secondary" style="font-size: .8em">Save</b></button>
                    </p>
                </form>
                {{-- @php
                    dd(auth()->user()->id,'he',$commentaire->etudiant_id,'she');
                @endphp --}}
                    <div  class=" py-1 pt-2">
                        <span id="commentaire-{{$commentaire->id}}" class="text1">{{$commentaire->content}}</span> 
                        @if($commentaire->etudiant_id==auth()->user()->id)
                        <div><button onclick="showComment('{{ $commentaire->id }}', 1)" class="text3 text3o">edit</button><span class="thumbup"></span>
                            <button wire:click="destroy({{$commentaire->id}})" class="text4 text4i  text-decoration-none ">delete</button></div>
                         @endif
                    </div>
                
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@livewireScripts