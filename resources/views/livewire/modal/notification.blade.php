<div style="z-index:2;"> 
    <a class="nav-icon" wire:click="booleanNotification">
        <i class="bi bi-bell {{ $focus ? 'text-info ' : 'text-white' }}; "></i>
    </a>
    <ul class="dropdown-modal" style="background-color:#181047; display: {{ $Notification ? 'block'  : 'none' }};">
        <li style="background-color:#101218;" ><a class="dropdown-item fw-normal text-white" href="{{ route('logout') }}">1</a></li>
        <li style="background-color:#101218;" ><a class="dropdown-item fw-normal text-white" href="{{ route('logout') }}">2</a></li>
    </ul>
</div>

