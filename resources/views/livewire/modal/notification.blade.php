<div style="z-index:2;"> 
    <a class="nav-icon" wire:click="booleanNotification">
        <i class="bi bi-bell {{ $focus ? 'text-info ' : 'text-white' }}; "></i>
    </a>
    <div class="notification overflow-y-auto py-2 px-2 " style="background-color:#181047; display: {{ $Notification ? 'block'  : 'none' }} ;">
        @foreach ($data as $post)
        <div class="d-flex justify-content-center align-items-center rounded border py-2 px-4 mt-2" style="background-color: #101218 ;" >
            <p class="text-white fw-lighter" >
                <span class="fw-medium" >{{$post->user->email}}</span> 
                <span class="nunito" style="font-size: 15px" >likes your</span>
                <span href="{{ route('view', ['postId' => $post->post_id]) }}" wire:navigate class="text-primary" style="font-size: 15px; cursor: pointer;" >{{$post->title}}</span></p>
        </div>
        @endforeach
    </div>
  
</div>

