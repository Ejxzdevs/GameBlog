@extends('components.layouts.app')
@section('pages')
    <div class="h-100 p-0 overflow-scroll overflow-x-hidden">
        <div class="h-25 d-flex justify-content-center align-items-center fm-lato fw-bold">
            <h1>GAMES</h1>
            
        </div>
        <div class="h-auto d-flex flex-wrap gap-5 align-items-center py-5 ps-4">
            {{-- Card --}}
            <div class="card pb-3 gap-2 mb-5" style="width: 24rem; height:365px ; border: none; background-color:#EDF1FF;">
                <img src="{{ asset('images/event.jpg') }}" class="card-img-top" style="height: 180px; object-fit: cover; ">
                <div class="card-body p-0 ">
                    <p class="fm-Abel">Ejhay Gofredo</p>
                    <h6 class="card-title overflow-y-hidden " style="height:40px">Legendary Clash: The Ultimate Mobile Legends Tournament</h6>
                    <p class="card-text overflow-y-hidden py-0 " style="height:75px "><a class="text-decoration-none text-secondary" href="">Join us for an epic showdown at the Warriors Unite: Mobile Legends Event Extravaganza! This thrilling event brings together the best warriors from across the land to compete in an unforgettable Mobile Legends tournament. Whether you're a seasoned veteran or a passionate newcomer, this event promises excitement, fierce competition, and incredible rewards </a></p>
                </div>
                <div class="card-body py-0 px-0 mb-2">
                  <a href="#" class="card-link fm-lato" style="text-decoration: none;"><i class="bi bi-heart" style="color: black;"> 123</i></a>
                  <a href="#" class="card-link fm-lato" style="text-decoration: none;"><i class="bi bi-chat  " style="color: black" > 45</i></a>
                </div>
            </div>

            <div class="card pb-3 gap-2 mb-5" style="width: 24rem; height:365px ; border: none; background-color:#EDF1FF;">
                <img src="{{ asset('images/event.jpg') }}" class="card-img-top" style="height: 180px; object-fit: cover; ">
                <div class="card-body p-0 ">
                    <p class="fm-Abel">Ejhay Gofredo</p>
                    <h6 class="card-title overflow-y-hidden " style="height:40px">Legendary Clash: The Ultimate Mobile Legends Tournament</h6>
                    <p class="card-text overflow-y-hidden py-0 " style="height:75px "><a class="text-decoration-none text-secondary" href="">Join us for an epic showdown at the Warriors Unite: Mobile Legends Event Extravaganza! This thrilling event brings together the best warriors from across the land to compete in an unforgettable Mobile Legends tournament. Whether you're a seasoned veteran or a passionate newcomer, this event promises excitement, fierce competition, and incredible rewards </a></p>
                </div>
                <div class="card-body py-0 px-0 mb-2">
                  <a href="#" class="card-link fm-lato" style="text-decoration: none;"><i class="bi bi-heart" style="color: black;"> 123</i></a>
                  <a href="#" class="card-link fm-lato" style="text-decoration: none;"><i class="bi bi-chat  " style="color: black" > 45</i></a>
                </div>
            </div>

            <div class="card pb-3 gap-2 mb-5" style="width: 24rem; height:365px ; border: none; background-color:#EDF1FF;">
                <img src="{{ asset('images/event.jpg') }}" class="card-img-top" style="height: 180px; object-fit: cover; ">
                <div class="card-body p-0 ">
                    <p class="fm-Abel">Ejhay Gofredo</p>
                    <h6 class="card-title overflow-y-hidden " style="height:40px">Legendary Clash: The Ultimate Mobile Legends Tournament</h6>
                    <p class="card-text overflow-y-hidden py-0 " style="height:75px "><a class="text-decoration-none text-secondary" href="">Join us for an epic showdown at the Warriors Unite: Mobile Legends Event Extravaganza! This thrilling event brings together the best warriors from across the land to compete in an unforgettable Mobile Legends tournament. Whether you're a seasoned veteran or a passionate newcomer, this event promises excitement, fierce competition, and incredible rewards </a></p>
                </div>
                <div class="card-body py-0 px-0 mb-2">
                  <a href="#" class="card-link fm-lato" style="text-decoration: none;"><i class="bi bi-heart" style="color: black;"> 123</i></a>
                  <a href="#" class="card-link fm-lato" style="text-decoration: none;"><i class="bi bi-chat  " style="color: black" > 45</i></a>
                </div>
            </div>

            <div class="card pb-3 gap-2 mb-5" style="width: 24rem; height:365px ; border: none; background-color:#EDF1FF;">
                <img src="{{ asset('images/event.jpg') }}" class="card-img-top" style="height: 180px; object-fit: cover; ">
                <div class="card-body p-0 ">
                    <p class="fm-Abel">Ejhay Gofredo</p>
                    <h6 class="card-title overflow-y-hidden " style="height:40px">Legendary Clash: The Ultimate Mobile Legends Tournament</h6>
                    <p class="card-text overflow-y-hidden py-0 " style="height:75px "><a class="text-decoration-none text-secondary" href="">Join us for an epic showdown at the Warriors Unite: Mobile Legends Event Extravaganza! This thrilling event brings together the best warriors from across the land to compete in an unforgettable Mobile Legends tournament. Whether you're a seasoned veteran or a passionate newcomer, this event promises excitement, fierce competition, and incredible rewards </a></p>
                </div>
                <div class="card-body py-0 px-0 mb-2">
                  <a href="#" class="card-link fm-lato" style="text-decoration: none;"><i class="bi bi-heart" style="color: black;"> 123</i></a>
                  <a href="#" class="card-link fm-lato" style="text-decoration: none;"><i class="bi bi-chat  " style="color: black" > 45</i></a>
                </div>
            </div>





            
         
           
        </div>
        <footer class="h-25 p-0 border-top border-secondary-50">
            @livewire('partials.footer')
        </footer>
    </div>
@endsection
