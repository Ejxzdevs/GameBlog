@extends('components.layouts.app')
@section('pages')
        <div>
                <livewire:partials.components.view-post :post-id="$postId" />
        </div>
@endsection
