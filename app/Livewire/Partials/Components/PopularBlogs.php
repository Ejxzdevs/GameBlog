<?php

namespace App\Livewire\Partials\Components;
use App\Models\Post;
use Livewire\Component;

class PopularBlogs extends Component
{
    public function render()
    {
        $posts = Post::with([
            'user' => function ($query) {
                $query->select('id','email'); // Include 'id' to ensure proper join
            }
        ])
        ->withCount('likes') 
        ->orderBy('likes_count', 'desc') 
        ->limit(10)
        ->get();

        return view('livewire.partials.components.popular-blogs',['posts' => $posts]);
    }
}
