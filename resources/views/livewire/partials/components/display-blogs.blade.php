<div >
        <div class="d-flex justify-content-center align-items-center fm-lato fw-bold" style="height: 170px">
            <h1>GAMES</h1>
        </div>
        <div class="h-auto d-flex flex-wrap gap-5 align-items-center py-5 ps-4">
            {{-- Card --}}
        @foreach ($posts as $post)
            <div class="card pb-3 gap-2 mb-5" style="width: 24rem; height:365px ; border: none; background-color:#EDF1FF;">
                <img src="{{ asset('storage/' . $post->image_url) }}" class="card-img-top p-1" style="height: 180px; background-position: center;  background-size: cover; object-fit: contain; flex-shrink: 0;">
                <div class="card-body p-0 ">
                    <p class="fm-Abel">{{$post->user->email}}</p>
                    <h6 class="card-title overflow-y-hidden " style="height:40px">{{$post->title}}</h6>
                    <p class="card-text overflow-y-hidden py-0 " style="height:75px "><a class="text-decoration-none text-secondary" href=""> </{{$post->content}}a></p>
                </div>
                <div class="card-body py-0 px-0 mb-2">
                  <a href="#" class="card-link fm-lato" style="text-decoration: none;"><i class="bi bi-heart" style="color: black;"> 123</i></a>
                  <a href="#" class="card-link fm-lato" style="text-decoration: none;"><i class="bi bi-chat  " style="color: black" > 45</i></a>
                </div>
            </div>

            @endforeach
        </div>
       
    </div>


