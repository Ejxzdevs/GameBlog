<div>
        <div class="d-flex justify-content-center align-items-center fm-lato fw-bold" style="height: 150px">
            <h1>GAMES</h1>
        </div>
        <div class="h-auto d-flex flex-wrap gap-3 ps-4 align-items-center border-secondary-50">
            {{-- Card --}}
        @foreach ($posts as $post)
        @php
            $userId = Session::get('user_id');
            $totalLikes = Likes::totalLikes($post->id);
            $isLiked = Likes::ShowHearted($userId,$post->id);
        @endphp
        <div href="{{ route('view', ['postId' => $post->id]) }}" wire:navigate class="fade show card pb-3 border border-secondary-50 shadow-sm primary-color" style="width: 25rem; height:470px; border: none; background-color:#EDF1FF; cursor: pointer;">
            <div class="d-flex flex-row gap-2 ps-2 pt-2">
                <img class="mt-1" src="{{ asset('storage/images/default.png') }}" style="height:40px;" >
                <div class="flex-column">
                    <label class="text-sm-end fw-medium">{{$username = explode('@',$post->user->email)[0]}}</label>
                    <p style="font-size:.7rem;">{{ $post->created_at->format('F Y g:i a') }}</p>
                </div>
            </div>
            <img src="{{ asset('storage/' . $post->image_url) }}" class="px-1 m-0" style="height:190px;  object-fit:fill; ">
                <div class="align-items-center mt-4 ps-3 d-flex flex-row " style="height: 8px">
                    <p class="text-secondary">{{$totalLikes}}</p>
                </div>
                <div class="card-body ">
                    <h5 class="card-title overflow-y-hidden custom-title" style="height:30px">{{$post->title}}</h5>
                    <p class="content-color card-text overflow-y-hidden py-0 fs-6 text-justify" style="height:75px;  word-wrap: break-word;  ">{{$post->content}}</p>
                    <div class="d-flex flex-row">
                        <a href="#" class="card-link fm-lato d-flex flex-row gap-2" style="text-decoration: none;"><i class="bi bi-heart-fill" style="color: {{  $isLiked ? 'red' : 'black' }};"></i> <span style="color: black">Heart</span></a>
                        <a href="#" class="card-link fm-lato d-flex flex-row gap-2" style="text-decoration: none;"><i class="bi bi-chat-left  " style="color: black" ></i> <span style="color: black">comments</span></a>
                    </div>
                </div>        
                
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center align-items-center pt-5" style="height: 100px; ">
                {{ $posts->links() }}
        </div>
    
    </div>


