<?php

namespace App\Livewire\Modal;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;




class Signin extends Component
{

    public $email,$password,$showModal = false;

    public function UserEntry()
{
  
    $this->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
        $user = Auth::user();

        // dd($user->id);
        // Store user type in the session
        Session::put('user_type', $user->user_type);
        Session::put('user_id', $user->id);

        return redirect()->route('end-user-home');
        // return redirect()->route('home');
    } else {
        return redirect()->back();
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
