<?php

namespace App\Livewire\Modal;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;

class Signup extends Component

    {
        // #[Rule('required|email|unique:users')]
        public $email;
        // #[Rule('required|min:5')]
        public $password;

        // #[Rule('required|same:password')]
        public $repassword;

        public function createUser()
        {   
                // $this->validate();

            $this-> validate([
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5',
                'repassword' => 'required|same:password',
            ]);
            User::create([
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
    
            $this->reset(['email', 'password','repassword']);
           
        }

        public $showModal = false;
    
        public function openModal()
        {
            $this->showModal = true;
        }

        public function closeModal()
        {
            $this->showModal = false;
        }

        public function render()
        {
            return view('livewire.modal.signup');
        }
    }