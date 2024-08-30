@php
    $userType = Session::get('user_type');
@endphp
@if ($userType === 'End_User')
    <div class="h-100 nav-container ">
        <a class="text-decoration-none nav-icon" href="{{ route('post') }}">
            <i class="bi bi-pencil-square"  ></i>
            </a>
        <a class="text-decoration-none nav-icon" href="{{ route('blog') }}">
            <i class="bi bi-list" ></i>
        </a>
        @livewire('modal.notification')
        @livewire('modal.acc-option')
    </div>
@else
    <div class="h-100 nav-container ">
        <a class="text-decoration-none nav-icon" href="{{ route('blog') }}"><i class="bi bi-list" ></i></a>
        <a class="text-decoration-none nav-icon" href="{{ route('about') }}"><i class="bi bi-book"></i></a>
        @livewire('modal.signin')
        @livewire('modal.signup')
    </div>
@endif
