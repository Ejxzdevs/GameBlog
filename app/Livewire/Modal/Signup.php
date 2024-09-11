<?php

namespace App\Livewire\Modal;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
class Signup extends Component

    {
        // #[Rule('required|email|unique:users')]
        public $email;
        // #[Rule('required|min:5')]
        public $password;

        // #[Rule('required|same:password')]
        public $repassword;
        public $successMessage = "Successfully Create Account";
        

        public function createUser()
        {
            $this->validate([
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5',
                'repassword' => 'required|same:password',
            ]);
        
            User::create([
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'user_type' => 'End_User',
            ]);
        
            $this->reset(['email', 'password', 'repassword']);
            $this->dispatch('alert-success', ['success' => $this->successMessage]);
        }
        
        public $showModal = false;
    
        public function openSignupModal()
        {
            $this->showModal = true;
        }

        public function closeSignupModal()
        {
            $this->showModal = false;
        }

        public function render()
        {
            return view('livewire.modal.signup');
        }
    }