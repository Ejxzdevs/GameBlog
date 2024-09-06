<div class="gap-4 pt-1 ">
    <div class="d-flex flex-column primary-color shadow-sm mt-5 gap-3 pb-5 px-3 " style="cursor: pointer;">
       <p class="ms-2 mt-2 fw-medium">Latest</p>
       @foreach($posts as $post)
            <div href="{{ route('view', ['postId' => $post->id]) }}" wire:navigate class="d-flex flex-column ps-3 mb-3">
                <div class="d-flex flex-row">   
                    <img class="mt-1" src="{{ asset('storage/images/default.png') }}" style="height:20px;" ><p class="ms-2 fw-normal text-secondary">{{$post->title}}</p>
                </div>
                <div style="height: 3rem; overflow: hidden " >
                    <p class="ms-1 fw-medium" style="word-wrap: break-word;">{{$post->content}}</p>
                </div>
            </div>
       @endforeach
    </div>
</div>
