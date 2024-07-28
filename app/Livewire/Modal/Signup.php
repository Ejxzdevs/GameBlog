<?php

namespace App\Livewire\Modal;

use Livewire\Component;

class Signup extends Component
{   
    public $showModal = false;
    public function toggleModal()
    {
        $this->showModal = !$this->showModal;
    }
  
    public function render()
    {
        return view('livewire.modal.signup');
    }
 
}
