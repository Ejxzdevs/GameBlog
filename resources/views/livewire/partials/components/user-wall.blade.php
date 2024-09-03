<div class="w-100 gap-3 d-flex flex-column d-flex justify-content-center align-items-center">
    @foreach ($posts as $post)
    <div href="{{ route('view', ['postId' => $post->id]) }}" wire:navigate class="post-container p-5 gap-3">
        <p class="custom-email"><img src="{{ asset('storage/images/default.png') }}" > <span>{{$username = explode('@', $post->user->email)[0]}}
        </span></p>
        <p class="fw-bolder title-size custom-title">{{$post->title}}</p>
        <p class="content-color" >{{$post->content}}</p>
        <div class="d-flex justify-content-center align-items-center">
            <img src="{{ asset('storage/' . $post->image_url) }}" class="img-post card-img-top p-1 border border-secondary-50" >
        </div>
        @php
            $userId = Session::get('user_id');
            $totalLikes = Likes::totalLikes($post->id);
            $isLiked = Likes::ShowHearted($userId,$post->id);
        @endphp
        <div class="ps-3 align-items-center gap-3 d-flex flex-row " style="height: 40px">
            {{$totalLikes}}
        </div>
        <div class="ps-2 align-items-center gap-3 d-flex flex-row border-top border-bottom border-secondary-50" style="height: 40px">
            <a class="card-link fm-lato d-flex flex-row gap-2" style="text-decoration: none;"><i class="bi bi-heart" style="color: {{  $isLiked ? 'red' : 'black' }};"></i><span style="color: black">Heart</span></a>
            <a href="#" class="card-link fm-lato d-flex flex-row gap-2" style="text-decoration: none; "><i class="bi bi-chat-left" style="color: black" ></i><span style="color: black">Commnent</span></a>
        </div>
    </div>
    @endforeach
</div>
