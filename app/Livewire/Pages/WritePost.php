<?php

namespace App\Livewire\Pages;

// use Livewire\WithFileUploads;
// use App\Models\Post;
use Livewire\Component;



class WritePost extends Component
{   
    // use WithFileUploads; // Enables file upload

    public $title, $content, $image;
    

    public function create()
    {
        dd('heres');
        // // Validate the form inputs
        // $this->validate([
        //     'title' => 'required|unique:posts,title', // Ensure 'title' is unique
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
        //     'content' => 'required', // Content is required
        // ]);

        // // Process the image upload
        // $imagePath = $this->image->store('images', 'public'); // Store in 'public/images'
        // $filename = basename($imagePath); // Extract filename

        // // Create a new Post entry
        // Post::create([
        //     'title' => $this->title,
        //     'image' => $filename, // Save the filename
        //     'content' => $this->content,
        // ]);

        // $this->reset(); // Reset the form fields
    }

    public function render()
    {
        return view('livewire.pages.write-post'); // Render the component view
    }
}
