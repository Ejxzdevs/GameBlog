<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>End User</title>
    @livewireStyles
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid custom-vh-100 m-0 p-0 overflow-hidden">
        <header class="row custom-vh-10 ">
            <div class="col d-flex align-items-center" style="width: 50%">
                <h3 class="text-white ps-2 fw-bold fm-Orbitron  "><span class="gradient-text">G</span>ame<span class="gradient-text">B</span>lo<span class="gradient-text">g</span></h3>
            </div>
            <nav class="col w-25" style="width: 400px">
                @livewire('partials.navbar')
            </nav>
        </header>
        <main class="row p-0 content custom-vh-90">
            @yield('pages')
        </main>
    </div>
    @livewireScripts
</body>
</html>
