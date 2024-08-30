<div style="z-index:2;"> 
    <a class="nav-icon" wire:click="booleanNotification">
        <i class="bi bi-bell {{ $focus ? 'text-info ' : 'text-white' }}; "></i>
    </a>
    <ul class="dropdown-modal" style="display: {{ $Notification ? 'block'  : 'none' }};">
        <li><a class="dropdown-item fw-normal" href="{{ route('logout') }}">1</a></li>
        <li><a class="dropdown-item fw-normal" href="{{ route('logout') }}">2</a></li>
    </ul>
</div>

