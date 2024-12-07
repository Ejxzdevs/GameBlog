<div class="w-100 d-flex flex-row ">
    <div style="width: 40%">
        <div class="rounded d-flex gap-4 justify-content-end ms-4" style="width: 100%; height: 400px;" >
            <div style=" height: 67%; width: 97%; margin-top: 38px; "  >
                <div class="w-100 h-100 border" style="border-radius: 10px; background-image: linear-gradient(to bottom,
                white 0%,
                white 35%,
                black 35%,
                black 100%
                ) " >
                    <div class="align-items-center pt-5 ps-4" style="height: 70%; " >
                        <img src="{{ asset('storage/images/edit-profile.png') }}" style="height: 7rem; border: solid 7px black; border-radius: 50%;">
                        <p class="text-white mt-1 fw-medium" >Ejhay Gofredo</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="height: 30%; "  >
                        <button class="rounded text-white fw-medium py-1 border" style="width: 70%; background-color: #676971" >Edit Profile</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-5"style="width: 60%">
    <label class="ms-3 fs-5 fw-bold text-white p-0 m-0" >Posts</label>
    @foreach ($posts as $post)
    <div  href="{{ route('view', ['postId' => $post->id]) }}" wire:navigate class="ms-3 mb-4 mt-2 p-2 d-flex flex-row shadow-sm rounded  " style="cursor: pointer; background-color: #101218; width: 600px; height: 265px; border: solid white 1px; ">
        <div class="card-body d-flex flex-column p-2 " style="width: 65%" >
            <div class="d-flex flex-row gap-2 text-white">
                <img class="mt-1" src="{{ asset('storage/images/default.png') }}" style="height:35px; border-radius: 5px; " >
                <div >
                    <label class="text-sm-end fw-medium">{{$username = explode('@',$post->user->email)[0]}}</label>
                    <p style="font-size:.7rem;">{{ $post->created_at->format('F Y g:i a') }}</p>
                </div>
            </div>
            <h5 class="text-white fs-6 card-title display-3 overflow-y-hidden" style="height:40px; font-size: 18px; ">{{$post->title}}</h5>
            <p class="text-secondary content-color card-text overflow-y-hidden py-0 text-justify" style="height:75px;  word-wrap: break-word; font-size: 12px;  ">{{$post->content}}</p>
            @php
                $userId = Session::get('user_id');
                $totalLikes = Likes::totalLikes($post->id);
                $isLiked = Likes::ShowHearted($userId,$post->id);
            @endphp
            <div>
                <a href="#" class="card-link fm-lato d-flex flex-row gap-1" style="text-decoration: none;"><i class="bi bi-heart-fill" style="color: {{  $isLiked ? 'red' : 'white' }};"></i> <span class="text-primary">{{$totalLikes}} </span></a>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center p-1" style="width: 35%"> 
            <img src="{{ asset('storage/' . $post->image_url) }}" class="px-1 mb-1" style="height:100px; width: 35% object-fit:fill; ">
        </div>
   </div>
    @endforeach
    </div>
</div>
