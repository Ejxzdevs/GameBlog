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
        ->inRandomOrder()
        ->paginate(9);
        return view('livewire.partials.components.display-blogs', ['posts' => $posts]);
    }
}
