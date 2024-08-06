@php
    $userType = session('user_type');
@endphp

@if ($userType === 'End_User')
    <div class="h-100 d-flex justify-content-end align-items-center gap-4 pe-3 fs-6">
        <a class="text-decoration-none text-white fm-lato" href="{{ route('end-user-home') }}">WRITE</a>
        <a class="text-decoration-none text-white fm-lato" href="{{ route('logout') }}">LOG OUT</a>
        <a class="text-decoration-none text-white fm-lato" href="{{ route('end-user-home') }}">PROFILE PIC</a>
    </div>
@else
    <div class="h-100 d-flex justify-content-end align-items-center gap-4 pe-3 fs-6">
        <a class="text-decoration-none text-white fm-lato" href="{{ route('blog') }}">BLOGS</a>
        <a class="text-decoration-none text-white fm-lato" href="{{ route('about') }}">ABOUT</a>
        <a class="text-decoration-none text-white fm-lato" href="{{ route('end-user-home') }}">End user home</a>
        @livewire('modal.signin')
        @livewire('modal.signup')
    </div>
@endif
