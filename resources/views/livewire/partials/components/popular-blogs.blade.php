<div class="" >
    <label class="text-white card-title fs-3 russo-one-regular fw-medium" style="font-size:24px;">Popular Blogs</label>
<div class="d-flex flex-column gap-3 pb-5 overflow-y-scroll py-2  " style="height: 1000px;  scrollbar-width: thin;" >
    
        @foreach ($posts as $post)
   <div  href="{{ route('view', ['postId' => $post->id]) }}" wire:navigate class="p-1 d-flex flex-row shadow-sm rounded  " style="cursor: pointer; background-color: #101218; width: 680px; height: 220px; ">
        <div class="card-body d-flex flex-column p-2 " style="width: 65%" >
            <div class="d-flex flex-row gap-1 text-white">
                <img class="mt-1" src="{{ asset('storage/images/default.png') }}" style="height:35px;  border-radius: 5px; " >
                <div class="flex-column">
                    <label class="text-sm-end fw-medium nunito" style="font-size: 12px">{{$post->user->email}}</label>
                    <p style="font-size:.7rem; color:#2e79f2;">{{ $post->created_at->format('F Y g:i a') }}</p>
                </div>
            </div>
            <h5 class="text-white fs-6 card-title display-3 overflow-y-hidden" style="height:30px; font-size: 14px; ">{{$post->title}}</h5>
            <p class="text-secondary content-color card-text overflow-y-hidden py-0 text-justify" style="height:75px;  word-wrap: break-word; font-size: 12px;  ">{{$post->content}}</p>
            @php
                $userId = Session::get('user_id');
                $totalLikes = Likes::totalLikes($post->id);
                $isLiked = Likes::ShowHearted($userId,$post->id);
            @endphp
            <div>
                <a href="#" class="card-link fm-lato d-flex flex-row gap-1" style="text-decoration: none;"><i class="bi bi-heart-fill" style="color: {{  $isLiked ? 'red' : 'white' }};"></i> <span class="text-primary nunito">{{$totalLikes}} </span></a>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center p-1" style="width: 35%"> 
            <img src="{{ asset('storage/' . $post->image_url) }}" class="px-1 mt-3" style="height:100px; width:240px; object-fit:fill; ">
        </div>
   </div>
   @endforeach
</div>
</div>
