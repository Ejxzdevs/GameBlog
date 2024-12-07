<?php 

namespace App\Livewire\Partials\Components;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class DisplayBlogs extends Component
{
    use WithPagination;

    public $name = '';
    public function render()
    {
        $posts = Post::query() 
            ->when($this->name, function ($query) {
                $query->where('title', 'like', '%' . $this->name . '%');
            })
            ->paginate(12);
        return view('livewire.partials.components.display-blogs', ['posts' => $posts]);
    }
}
