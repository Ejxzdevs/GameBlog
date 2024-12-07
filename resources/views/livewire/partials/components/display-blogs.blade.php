<div>
    <div class="d-flex align-items-center justify-content-center fm-lato fw-bold border mb-3 rounded" 
    style="height: 150px; background-image: url('{{ asset('storage/images/games.jpg') }}'); background-size: cover; background-position: center;">
                <p class="fs-2" style="background: linear-gradient(45deg, #ffffff, #FF6F91, #181047); 
                -webkit-background-clip: text; background-clip: text; color: transparent;">
                Game On: News, Reviews, and Everything in Between
            </p>
        </div>
        <div class="d-flex ps-5 my-3">
            <div class="rounded d-flex flex-col align-items-center gap-2 px-2" style="width: 350px; height: 2.5rem; border: 2px #181047 solid; background-color:aliceblue; " >
                <i class="bi bi-search" style="color: #181047" ></i>
                <input class="w-100 h-100 rounded p-1"  wire:model.live="name" type="text" style="border: none; outline: none; font-size: 12px; background-color: transparent;" placeholder="Search Title:" >
            </div>
        </div>  
        <div class="h-auto d-flex flex-wrap gap-3 ps-5 align-items-center border-secondary-50" style="padding: 0 2rem">
            {{-- Card --}}
        @foreach ($posts as $post)
        @php
            $userId = Session::get('user_id');
            $totalLikes = Likes::totalLikes($post->id);
            $isLiked = Likes::ShowHearted($userId,$post->id);
        @endphp
        <div href="{{ route('view', ['postId' => $post->id]) }}" wire:navigate class="fade show card pb-3 border border-secondary-50 shadow primary-color rounded" style="width: 350px; height:400px; background-color:#101218; cursor: pointer;">
            <div class="d-flex flex-row gap-2 ps-3 pt-2">
                <img class="mt-1 py-2 rounded" src="{{ asset('storage/images/default.png') }}" style="height:40px; " >
                <div class="flex-column">
                    <label class="text-sm-end fw-medium text-white ">{{$username = explode('@',$post->user->email)[0]}}</label>
                    <p class="text-white" style="font-size:.7rem;">{{ $post->created_at->format('F Y g:i a') }}</p>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center" >
                <img src="{{ asset('storage/' . $post->image_url) }}" class="p-0 m-0" style="height:150px; width: 320px;  object-fit:fill; border: solid white 1px; ">
            </div>
                <div class="px-3 mt-3 mb-2" style="height: 5px">
                    <p class="text-primary" style="font-size: 10px:"  >{{$totalLikes}}</p>
                </div>
                <div class="card-body ">
                    <label class="text-white card-title overflow-y-hidden fw-medium fs-6" style="height:20px">{{$post->title}}</label>
                    <p class="text-secondary card-text overflow-y-hidden py-0 text-justify" style="height:50px;  word-wrap: break-word; font-size: 12px; font-family:Arial, Helvetica, sans-serif;  ">{{$post->content}}</p>
                    <div class="d-flex flex-row">
                        <a href="#" class="card-link fm-lato d-flex flex-row gap-2" style="text-decoration: none;"><i class="bi bi-heart-fill" style="color: {{  $isLiked ? 'red' : 'black' }};"></i> <span class="text-white" >Heart</span></a>
                        <a href="#" class="card-link fm-lato d-flex flex-row gap-2" style="text-decoration: none;"><i class="bi bi-chat-left text-white" ></i> <span class="text-white">comments</span></a>
                    </div>
                </div>        
                
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center align-items-center pt-5" style="height: 100px; ">
                {{ $posts->links() }}
        </div>
    
    </div>


