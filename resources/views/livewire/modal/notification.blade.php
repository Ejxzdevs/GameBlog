<div> 
    <button type="button" wire:click="booleanNotification" class="btn-open-profile">
        <i class="bi bi-bell fs-5 nav-icon"></i>
    </button>
    <ul class="notification-customize" style="display: {{ $Notification ? 'block'  : 'none' }};">
        <li><a class="dropdown-item fw-normal" href="{{ route('logout') }}">1</a></li>
        <li><a class="dropdown-item fw-normal" href="{{ route('logout') }}">2</a></li>
    </ul>
</div>

