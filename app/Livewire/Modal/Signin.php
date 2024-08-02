<?php

namespace App\Livewire\Modal;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Signin extends Component
{

    public $email;
    public $password;
    public $showModal = false;

    public function UserEntry()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            dd ("SUCCESS");
        } else {
            dd ("FAILED");
        }
    }
    
    public function openLoginModal()
    {
        $this->showModal = true;
    }

    public function closeLoginModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.modal.signin');
    }
}
