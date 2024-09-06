<div class="d-flex flex-column gap-1 pt-2 ps-2">
    <label class="card-title display-3 overflow-y-hidden custom-title fw-medium" style="font-size:2rem;">POPULAR BLOGS</label>
        @foreach ($posts as $post)
   <div href="{{ route('view', ['postId' => $post->id]) }}" wire:navigate class="d-flex flex-row  primary-color shadow-sm " style="cursor: pointer;">
        <div class="card-body d-flex flex-column gap-1 p-2 " style="width: 65%" >
            <div class="d-flex flex-row gap-2">
                <img class="mt-1" src="{{ asset('storage/images/default.png') }}" style="height:40px;" >
                <div class="flex-column">
                    <label class="text-sm-end fw-medium">{{$username = explode('@',$post->user->email)[0]}}</label>
                    <p style="font-size:.7rem;">{{ $post->created_at->format('F Y g:i a') }}</p>
                </div>
            </div>
            <h5 class="card-title display-3 overflow-y-hidden custom-title" style="height:30px">{{$post->title}}</h5>
            <p class="content-color card-text overflow-y-hidden py-0 fs-6 text-justify" style="height:75px;  word-wrap: break-word;  ">{{$post->content}}</p>
            @php
                $userId = Session::get('user_id');
                $totalLikes = Likes::totalLikes($post->id);
                $isLiked = Likes::ShowHearted($userId,$post->id);
            @endphp
            <div>
                <a href="#" class="card-link fm-lato d-flex flex-row gap-2" style="text-decoration: none;"><i class="bi bi-heart-fill" style="color: {{  $isLiked ? 'red' : 'black' }};"></i> <span class="text-secondary">{{$totalLikes}} </span></a>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center p-1" style="width: 35%"> 
            <img src="{{ asset('storage/' . $post->image_url) }}" class="px-1 m-0 shadow" style="height:130px; width: 35% object-fit:fill; ">
        </div>
   </div>
   @endforeach
</div>
