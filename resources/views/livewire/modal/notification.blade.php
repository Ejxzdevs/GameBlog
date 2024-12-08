<div style="z-index:2;"> 
    <a class="nav-icon" wire:click="booleanNotification">
        <i class="bi bi-bell {{ $focus ? 'text-info ' : 'text-white' }}; "></i>
    </a>
    <div class="notification overflow-y-auto py-2 px-2 " style="background-color:#181047; display: {{ $Notification ? 'block'  : 'none' }} ;  scrollbar-width: thin;">
        <p class="fs-6 p-0 m-0 ms-1 text-white nunito fw-bold" >Notifications</p>
        @foreach ($data as $post)
        <div class="d-flex justify-content-center align-items-center rounded border py-1 px-4 mt-2" style="background-color: #101218 ;" >
            <p class="text-white fw-lighter" >
                <span class="fw-medium" style="font-size: 14px" >{{$post->user->email}}</span> 
                <span class="nunito" style="font-size: 13px" >likes your</span>
                <span href="{{ route('view', ['postId' => $post->post_id]) }}" wire:navigate class="text-primary" style="font-size: 13px; cursor: pointer;" >{{$post->title}}</span></p>
        </div>
        @endforeach
    </div>
  
</div>

