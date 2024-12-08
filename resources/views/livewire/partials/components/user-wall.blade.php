<div class="w-100 d-flex flex-row ">
    <div style="width: 40%">
        <div class="rounded d-flex gap-4 justify-content-end ms-4" style="width: 100%; height: 450px;" >
            <div style=" height: 62%; width: 80%; margin: 52px 40px 0 0;  "  >
                <div class="w-100 h-100 border" style="border-radius: 10px; background-image: linear-gradient(to bottom,
                white 0%,
                white 40%,
                #101218 40%,
                #101218 100%
                ) " >
                    <div class="align-items-center pt-5 ps-5" style="height: 70%; " >
                        <img class="ms-3 mt-3" src="{{ asset('storage/images/edit-profile.png') }}" style="height: 5.5rem; border: solid 7px black; border-radius: 50%;">
                        <p class="text-white mt-1 ms-4 fs-5 nunito" >{{Session::get('user_email')}}</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="height: 30%; "  >
                        <button class="rounded text-white fw-medium py-1 border nunito;" style="width: 70%; background-color: #676971; font-size: 14px; letter-spacing: 1px;" >EDIT PROFILE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-5"style="width: 60%">
    <label class="ms-3 fs-3 russo-one-regular text-white p-0 m-0" >Timeline Posts</label>
    @foreach ($posts as $post)
    <div  href="{{ route('view', ['postId' => $post->id]) }}" wire:navigate class="my-2 p-1 d-flex flex-row shadow-sm rounded  " style="cursor: pointer; background-color: #101218; width: 680px; height: 220px; ">
        <div class="card-body d-flex flex-column p-2 " style="width: 65%" >
            <div class="d-flex flex-row gap-1 text-white">
                <img class="mt-1" src="{{ asset('storage/images/default.png') }}" style="height:35px; border-radius: 5px; " >
                <div class="flex-column">
                    <label class="text-sm-end fw-medium nunito" style="font-size: 12px" >{{$post->user->email}}</label>
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
            <img src="{{ asset('storage/' . $post->image_url) }}" class="px-1 mt-3" style="height:100px; width: 35% object-fit:fill; ">
        </div>
   </div>
    @endforeach
    </div>
</div>
