@php
    $userId = Session::get('user_id');
    
@endphp

<div class="p-5" style="height: auto;">
    <div class="gap-3 d-flex flex-column d-flex justify-content-center align-items-center">
        <div class="post-container p-5 gap-4">
            <p class="fw-bolder fs-3">{{$post->title}}</p>
                <p >{{$post->content}}</p>
            <div class="d-flex justify-content-center align-items-center">
                <img src="{{ asset('storage/' . $post->image_url) }}" class="img-post card-img-top p-1" >
            </div>
            @php
                $isLiked = Likes::isLiked($userId,$post->id);
                $totalLikes = Likes::totalLikes($post->id);
            @endphp
            <div class="ps-3 align-items-center gap-3 d-flex flex-row " style="height: 40px">
                    {{$totalLikes}}
            </div>
            <div class="ps-2 align-items-center gap-3 d-flex flex-row border-top border-bottom border-secondary-50" style="height: 40px">
                <a wire:click="heart({{$userId}},{{$post->id}})" class="card-link fm-lato" style="text-decoration: none;"><i class="bi bi-heart" style="color: {{  $isLiked ? 'red' : 'black' }};">&nbsp;&nbsp;Heart</i></a>
                <a href="#" class="card-link fm-lato " style="text-decoration: none; "><i class="bi bi-chat-left" style="color: black" >&nbsp;&nbsp;Comment</i></a>
            </div>
        </div>
       
    </div>

</div>
