<div class="w-100 gap-3 d-flex flex-column d-flex justify-content-center align-items-center">
    @foreach ($posts as $post)
    <a href="{{ route('view', ['postId' => $post->id]) }}" wire:navigate class="post-container p-5 gap-4">
        <p class="fw-bolder fs-3">{{$post->title}}</p>
        <p >{{$post->content}}</p>
        <div class="d-flex justify-content-center align-items-center">
            <img src="{{ asset('storage/' . $post->image_url) }}" class="img-post card-img-top p-1 border border-secondary-50" >
        </div>
    </a>
    @endforeach
</div>
