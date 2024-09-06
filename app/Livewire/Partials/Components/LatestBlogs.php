<?php

namespace App\Livewire\Partials\Components;

use Livewire\Component;
use App\Models\Post;

class LatestBlogs extends Component
{
    public function render()
    {
        $posts = Post::with([
            'user' => function ($query) {
                $query->select('id', 'email');
            }
        ])
        ->orderBy('created_at', 'desc') // Order by latest created_at
        ->limit(5)
        ->get();
        return view('livewire.partials.components.latest-blogs',['posts' => $posts]);
    }
}
