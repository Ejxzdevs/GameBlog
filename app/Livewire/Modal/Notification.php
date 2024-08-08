<?php

namespace App\Livewire\Modal;

use Livewire\Component;

class Notification extends Component
{
    public $Notification = false;

    public function closeNotification(){
        $this->Notification = false;
   
    }

    public function booleanNotification() {
        $this->Notification = !$this->Notification;
        
    }

    public function render()
    {
        return view('livewire.modal.notification');
    }
}
