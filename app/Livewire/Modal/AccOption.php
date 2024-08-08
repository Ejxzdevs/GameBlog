<?php

namespace App\Livewire\Modal;

use Livewire\Component;

class AccOption extends Component
{   
    public $Profile = false;

    public function booleanProfile() {
        $this->Profile = !$this->Profile;
        $this->dispatch('closeNotif');

        
    }
    public function render()
    {
        return view('livewire.modal.acc-option');
    }
}
