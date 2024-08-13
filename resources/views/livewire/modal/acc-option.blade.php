<div>
    <div style="z-index:1;"> 
    <button type="button" wire:click="booleanProfile" class="btn-open-profile">
        <i class="bi bi-person-circle {{ $focus ? 'text-info ' : 'text-white' }}; fs-4"></i>
    </button>
    <ul class="notification-customize" style="display: {{ $Profile ? 'block' : 'none' }};">
        <li><i class="bi bi-person-circle fs-6 ms-3"></i> <a class="dropdown-item fw-normal" href="{{ route('profile') }}">Profile</a></li>
        <li><i class="bi bi-box-arrow-right fs-6 ms-3"></i><a class="dropdown-item fw-normal" href="{{ route('logout') }}">Log out</a></li>
    </ul>
    </div>
</div>
