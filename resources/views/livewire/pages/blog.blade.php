@extends('components.layouts.app')
@section('pages')
    <div class="p-0">
        @livewire('partials.components.display-blogs');
        <footer class="border-top border-secondary-50">
            @livewire('partials.footer')
        </footer>
    </div>
@endsection
