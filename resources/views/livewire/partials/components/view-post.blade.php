<div class="p-5" style="height: auto;">
    <div class="gap-3 d-flex flex-column d-flex justify-content-center align-items-center">
        <div class="post-container p-5 gap-4">
            <div class="d-flex flex-row gap-2">
                <img class="mt-1" src="{{ asset('storage/images/default.png') }}" style="height:40px;" >
                <div class="flex-column">
                    <label class="text-sm-end fw-medium nunito">{{$username = explode('@',$post->user->email)[0]}}</label>
                    <p style="font-size:.7rem;">{{ $post->created_at->format('F Y g:i a') }}</p>
                </div>
            </div>
            <p class="fw-bolder title-size custom-title">{{$post->title}}</p>
                <p class="content-color">{{$post->content}}</p>
            <div class="d-flex justify-content-center align-items-center">
                <img src="{{ asset('storage/' . $post->image_url) }}" class="img-post card-img-top p-1" >
            </div>
            @php
                $userId = Session::get('user_id');
                $isLiked = Likes::isLiked($userId,$post->id);
                $totalLikes = Likes::totalLikes($post->id);
            @endphp
            <div class="ps-2 align-items-center gap-3 d-flex flex-row " style="height: 40px">
                    <span class="text-secondary">{{$totalLikes}}</span>
            </div>
            <div class="ps-2 align-items-center gap-3 d-flex flex-row border-top border-bottom border-secondary-50" style="height: 40px">
                <a wire:click="heart({{$userId}},{{$post->id}})" class="card-link fm-lato d-flex flex-row gap-2" style="text-decoration: none;"><i class="bi bi-heart-fill" style="color: {{  $isLiked ? 'red' : 'black' }};"></i><span style="color: black">Heart</span></a>
                <a href="#" class="card-link fm-lato d-flex flex-row gap-2" style="text-decoration: none; "><i class="bi bi-chat-left" style="color: black" ></i><span style="color: black">comments</span></a>
            </div>
        </div>
    </div>

</div>
