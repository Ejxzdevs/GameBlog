<?php

namespace App\Livewire\Partials\Components;

use Livewire\Component;
use App\Models\Post;
class DisplayBlogs extends Component
{

    public $posts;

    public function mount()
    {
        $this->posts = Post::with('user')->get();
    }

    public function render()
    {
        return view('livewire.partials.components.display-blogs');
    }
}
