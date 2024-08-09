@php
    $userType = session('user_type');
@endphp

@if ($userType === 'End_User')
    <div class="h-100 d-flex flex-row justify-content-end align-items-center gap-4 me-4 ">
        <a class="text-decoration-none text-white fm-lato" href="{{ route('post') }}"><i class="bi bi-pencil-square fs-5" class="nav-icon"></i>&nbsp;&nbsp;Write</a>
        @livewire('modal.notification')
        @livewire('modal.acc-option')
    </div>
@else
    <div class="h-100 d-flex justify-content-end align-items-center gap-3 pe-2 fs-6">
        <a class="text-decoration-none text-white fm-lato" href="{{ route('blog') }}">BLOGS</a>
        <a class="text-decoration-none text-white fm-lato" href="{{ route('about') }}">ABOUT</a>
        @livewire('modal.signin')
        @livewire('modal.signup')
    </div>
@endif
