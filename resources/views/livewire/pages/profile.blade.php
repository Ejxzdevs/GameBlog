@extends('components.layouts.app')
@section('pages')
@php
    $email = Session::get('user_email');
@endphp
<div class="h-100p-0 m-0 ">
    <div class="px-5 py-2 " style="height: 200px ">
        <div class="h-100 d-flex flex-row gap-3 primary-color" style="border-radius:5px; box-shadow:1px 1px 2px;">
            <div class="h-100 d-flex justify-content-end align-items-center" style="width:170px"> 
                <img src="{{ asset('storage/images/default.png') }}" style="height: 100px" >
            </div>
            <div class="h-100 d-flex justify-content-center align-items-center pb-3">
                <h3 id="username">{{$username = explode('@', $email)[0]}}</h3>
            </div>
        </div>
    </div>
        <div class="h-auto px-5 py-2" >
            <div class="p-5 primary-color" style="border-radius:5px; box-shadow:1px 1px 2px;">
                @livewire('partials.components.user-wall')
            </div>
        </div>
</div>
@endsection
