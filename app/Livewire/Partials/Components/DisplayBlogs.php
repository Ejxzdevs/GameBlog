<?php

namespace App\Livewire\Partials\Components;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class DisplayBlogs extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::with('user')->paginate(12);
        return view('livewire.partials.components.display-blogs',['posts' =>  $posts ]);
    }
}
