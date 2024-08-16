<?php

namespace App\Livewire\Partials\Forms;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class PostForm extends Component
{
    public $title, $content, $image;
    // public $user_id;
    use WithFileUploads;

    // public function mount()
    // {
    //     $this->user_id = Auth::id();
  
    // }

    

    public function create()
    {   
        // Validate the form inputs
        $this->validate([
            'title' => 'required|unique:posts,title', // Ensure 'title' is unique
            'image' => 'required|max:2048', // Validate image
            'content' => 'required', // Content is required
        ]);

        // // Create a new Post entry
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'user_id' => Auth::id(),
            'image_url' => $this->image->storeAs('images', $this->image->getClientOriginalName(), 'public'),
        ]);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.partials.forms.postform');
    }
}
 