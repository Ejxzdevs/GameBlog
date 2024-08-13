<?php

namespace App\Livewire\Pages;

// use Livewire\WithFileUploads;
// use App\Models\Post;
use Livewire\Component;



class WritePost extends Component
{   
    // use WithFileUploads; // Enables file upload

    

    public function render()
    {
        return view('livewire.pages.write-post'); // Render the component view
    }
}
