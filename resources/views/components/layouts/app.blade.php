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
        <header class="row custom-vh-10" style="padding: 0 3rem" >
            <div class="col d-flex align-items-center" style="width: 50%">          
                <a class="text-white ps-2 fs-2 fw-bold fm-Orbitron" href="{{ route('home') }}" style="text-decoration: none;"><span class="gradient-text">G</span>ame<span class="gradient-text">B</span>lo<span class="gradient-text">g</span></a>
            </div>
            <nav class="col w-25" style="width: 400px">
                @livewire('partials.navbar')
            </nav>
        </header>
        <main class=" row custom-vh-90 " style="padding: 0 3rem">
            @yield('pages')
        </main>
    </div>
    @livewireScripts
</body>
</html>
