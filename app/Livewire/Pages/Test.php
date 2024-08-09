<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Test extends Component
{

    public function create(){
        dd('hello');
    }
    public function render()
    {
        dd('Component is being rendered');
        return view('livewire.pages.test');
    }
}
