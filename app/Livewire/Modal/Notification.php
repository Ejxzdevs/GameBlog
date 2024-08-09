<?php

namespace App\Livewire\Modal;

use Livewire\Component;

class Notification extends Component
{
    public $Notification = false;
    public $focus = false;
    

    public function closeNotification(){
      
        $this->Notification = false;
   
    }

    public function booleanNotification() {
        
        $this->Notification = !$this->Notification;
        $this->focus = !$this->focus;
        
    }

    public function render()
    {
        return view('livewire.modal.notification');
    }
}
