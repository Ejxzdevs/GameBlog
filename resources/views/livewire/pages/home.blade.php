@extends('components.layouts.app')
@section('pages')
<div class="d-flex flex-column   ">
  <div class="d-flex flex-row ps-3 py-2 gap-1">
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
