@extends('components.layouts.app')
@section('pages')
@php
    $email = Session::get('user_email');
@endphp
<div class="h-100 p-0 m-0 ">
    <div class="d-flex align-items-center justify-content-center gap-2 fm-lato fw-bold border mb-3 rounded" 
    style="height: 150px; background-image: url('{{ asset('storage/images/games.jpg') }}'); background-size: cover; background-position: center;">
                <p class="fs-2 russo-one-regular" style="background: linear-gradient(45deg, #ffffff, #FF6F91, #c6dd17); 
                -webkit-background-clip: text; background-clip: text; color: transparent;">
                Check Out Your Profile 
            </p>
        </div>
            <div>
                @livewire('partials.components.user-wall')
            </div>
        </div>
</div>
@endsection
