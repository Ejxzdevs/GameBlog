<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <title>@yield('title')</title>
    <style>
        .custom-vh-100{
            height: 100vh;
        }
        .custom-vh-10{
            height: 10%;
            background-color: black;
        }
        .custom-vh-75{
            height: 90%;
            background-color: #FFFFFF;
        }
        .fm-lato {
            font-family: 'Lato', sans-serif;
        }
        .fm-Orbitron{
            font-family: 'Orbitron', sans-serif;
        }
        .gradient-text {
            background: linear-gradient(45deg, #15e8e8 50%, #ffffff 50%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body>
    <div class="container-fluid custom-vh-100 p-0 overflow-hidden">
        <div class="row custom-vh-10">
            <div class="col d-flex align-items-center" style="width: 50%">
                <h3 class="text-white ps-2 fw-bold fm-Orbitron  "><span class="gradient-text">G</span>ame<span class="gradient-text">B</span>lo<span class="gradient-text">g</span></h3>
            </div>
            <div class="col w-25" style="width: 400px">
                @livewire('partials.navbar')
            </div>
        </div>
        <div class="content custom-vh-75">
            @yield('pages')
        </div>
    </div>
</body>
</html>
