
<div class="h-100 d-flex justify-content-end align-items-center  gap-4 pe-3 fs-6 " >
    <a class="text-decoration-none text-white fm-lato" href="{{ route('blog') }}">BLOGS</a>
    <a class= "text-decoration-none text-white fm-lato" href="{{ route('about') }}">ABOUT</a>
    @livewire('modal.signin')
    @livewire('modal.signup')
</div>

