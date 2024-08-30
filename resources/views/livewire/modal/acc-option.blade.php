<div style="z-index:1;"> 
    <a class="nav-icon" wire:click="booleanProfile">
        <i class="bi bi-person-circle {{ $focus ? 'text-info ' : 'text-white' }};"></i>
    </a>
    <ul class="dropdown-modal" style="display: {{ $Profile ? 'block' : 'none' }};">
        <li><i class="bi bi-person-circle fs-6"></i> <a class="dropdown-item fw-normal" href="{{ route('profile') }}">Profile</a></li>
        <li><i class="bi bi-box-arrow-right fs-6"></i><a class="dropdown-item fw-normal" href="{{ route('logout') }}">Log out</a></li>
    </ul>
</div>

