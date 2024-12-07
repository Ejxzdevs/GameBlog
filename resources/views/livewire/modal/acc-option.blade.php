<div style="z-index:1;"  > 
    <a class="nav-icon" wire:click="booleanProfile">
        <i class="bi bi-person-circle {{ $focus ? 'text-info ' : 'text-white' }};"></i>
    </a>
    <ul class="dropdown-modal" style="background-color:#181047; display: {{ $Profile ? 'block' : 'none' }}; ">
        <li style="background-color:#101218;" ><i class="text-white bi bi-person-circle fs-6"></i> <a class="dropdown-item fw-normal text-white" href="{{ route('profile') }}">Profile</a></li>
        <li style="background-color:#101218;" ><i class="text-white bi bi-box-arrow-right fs-6"></i><a class="dropdown-item fw-normal text-white" href="{{ route('logout') }}">Log out</a></li>
    </ul>
</div>

