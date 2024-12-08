<?php

namespace App\Livewire\Modal;
use App\Models\Post;
use Illuminate\Support\Facades\Session;

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
        $data = Post::query()
        ->join('likes', 'posts.id', '=', 'likes.post_id')
        ->join('users', 'likes.user_id', '=', 'users.id')
        ->where('posts.user_id', Session::get('user_id'))
        ->get();
        return view('livewire.modal.notification',['data' => $data]);
    }
}
