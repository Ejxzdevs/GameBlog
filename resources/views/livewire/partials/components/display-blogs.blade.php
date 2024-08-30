
<div >
        <div class="d-flex justify-content-center align-items-center fm-lato fw-bold" style="height: 130px">
            <h1>GAMES</h1>
          
        </div>
        <div class="h-auto d-flex flex-wrap gap-3 ps-4 align-items-center border-secondary-50">
            {{-- Card --}}
        @foreach ($posts as $post)
        @php
            $totalLikes = Likes::totalLikes($post->id);
        @endphp
        <div href="{{ route('view', ['postId' => $post->id]) }}" wire:navigate class="fade show card pb-3 gap-2 border border-secondary-50 shadow-sm primary-color" style="width: 25rem; height:480px; border: none; background-color:#EDF1FF;">
                <img src="{{ asset('storage/' . $post->image_url) }}" class="card-img-top p-1 border border-secondary-50" style="height: 230px; ">
                <div class="card-body ">
                    <p class="fm-Abel fst-normal" id="email" style="text-transform: capitalize; letter-spacing:1px;">{{$post->user->email}}</p>
                    <h5 class="card-title overflow-y-hidden fw-bolder " style="height:30px">{{$post->title}}</h5>
                    <p class="card-text overflow-y-hidden py-0 font-monospace" style="height:75px; text-indent: 15px;  "><a class="text-decoration-none text-secondary" href="">{{$post->content}} </a></p>
                    <a href="#" class="card-link fm-lato" style="text-decoration: none;"><i class="bi bi-heart" style="color: black;">{{$totalLikes}}</i></a>
                    <a href="#" class="card-link fm-lato" style="text-decoration: none;"><i class="bi bi-chat  " style="color: black" > 45</i></a>
                </div>        
            </div>
            @endforeach
        </div>
       <script>
            const emailElements = document.querySelectorAll('#email');

            emailElements.forEach((element) => {
            const email = element.textContent;
            const username = email.replace("@gmail.com", "");
            element.textContent = username;
        });
       </script>
    </div>


