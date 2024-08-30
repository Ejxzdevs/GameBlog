<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @livewireStyles
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="custom-vh-100">
        <header class="row custom-vh-10 ">
            <div class="col d-flex align-items-center" style="width: 50%">
            @php
                $userType = Session::get('user_type');
                
            @endphp
            @if ($userType === 'End_User')
                <a class="text-white ps-2 fs-2 fw-bold fm-Orbitron" href="{{ route('end-user-home') }}" style="text-decoration: none;"><span class="gradient-text">G</span>ame<span class="gradient-text">B</span>lo<span class="gradient-text">g</span></a>
            @else
                <a class="text-white ps-2 fs-2 fw-bold fm-Orbitron" href="{{ route('home') }}" style="text-decoration: none;"><span class="gradient-text">G</span>ame<span class="gradient-text">B</span>lo<span class="gradient-text">g</span></a>
            @endif
            </div>
            <nav class="col w-25" style="width: 400px">
                @livewire('partials.navbar')
            </nav>
        </header>
        <main class="row custom-vh-90 p-0">
            @yield('pages')
        </main>
    </div>
    @livewireScripts
</body>
</html>
