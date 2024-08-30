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
  
    $validatedData = $this->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($validatedData )) {

        // // dd($user->id);
        // // Store user type in the session
        Session::put('user_type', Auth::user()->user_type);
        Session::put('user_id', Auth::id());
        Session::put('user_email', Auth::user()->email);

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
