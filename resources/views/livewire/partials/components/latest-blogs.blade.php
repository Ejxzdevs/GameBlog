<div >
    <label class="text-white card-title fs-3 overflow-y-hidden russo-one-regular fw-medium" style="font-size:24px;">LATEST POSTS</label>
    <div class="d-flex flex-column shadow-sm mt-2 gap-3 pb-5 px-3 rounded " style="cursor: pointer; background-color: #101218;">
       @foreach($posts as $post)
            <div href="{{ route('view', ['postId' => $post->id]) }}" wire:navigate class="d-flex flex-column ps-1 my-2">
                <div class="d-flex flex-row">   
                    <img class="mt-1" src="{{ asset('storage/images/default.png') }}" style="height:20px;" ><p class="ms-2 fw-normal text-white">{{$post->title}}</p>
                </div>
                <div style="height: 3.5rem; overflow: hidden " >
                    <p class="ms-1 text-secondary" style="text-indent: 10px; font-size: 12px;  word-wrap: break-word;">{{$post->content}}</p>
                </div>
            </div>
       @endforeach
    </div>
</div>
