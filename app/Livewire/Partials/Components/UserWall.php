<?php

namespace App\Livewire\Partials\Components;
// use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\Post;

class UserWall extends Component
{
    public function render()
    {
        $posts = Post::where('user_id', Session::get('user_id'))->get();
        return view('livewire.partials.components.user-wall',['posts' => $posts]);
    }
}
