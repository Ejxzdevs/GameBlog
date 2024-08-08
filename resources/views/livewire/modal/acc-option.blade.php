<div> 
    <button type="button" wire:click="booleanProfile" class="btn-open-profile">
        <i class="bi bi-person-circle fs-4"></i>
    </button>
    <ul class="notification-customize" style="display: {{ $Profile ? 'block' : 'none' }};">
        <li><a class="dropdown-item fw-normal" href="{{ route('profile') }}">Profile</a></li>
        <li><a class="dropdown-item fw-normal" href="{{ route('logout') }}">Log out</a></li>
    </ul>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Livewire.on('closeNotif', event => {
           console.log('profile');
        });
    });
</script>
