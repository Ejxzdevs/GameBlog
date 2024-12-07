@extends('components.layouts.app')
@section('pages')
<div class="d-flex flex-column">
      <div class="d-flex align-items-center justify-content-center fm-lato fw-bold border mb-3 rounded" 
  style="height: 150px; background-image: url('{{ asset('storage/images/games.jpg') }}'); background-size: cover; background-position: center;">
              <p class="fs-2" style="background: linear-gradient(45deg, #ffffff, #FF6F91, #181047); 
              -webkit-background-clip: text; background-clip: text; color: transparent;">
              Level Up: The Newest Trends You Need to Know
          </p>
      </div>
  <div class="d-flex flex-row ps-3 gap-3">
    <div class="mt-3 " style="width:65%;">
        @livewire('partials.components.popular-blogs')
    </div>
    <div  class="mt-3" style="width:35%;">
      @livewire('partials.components.latest-blogs')
    </div>
  </div>
    <div>
      
    </div>
</div>
@endsection
