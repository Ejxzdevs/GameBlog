<?php

namespace App\Livewire\Partials\Components;
use App\Models\Post;
use App\Models\Like;

use Livewire\Component;

class ViewPost extends Component
{

    public $postId;
    public $totalLikes;

    public function heart($userId,$postId){
        $like = Like::where('user_id', $userId)
                   ->where('post_id', $postId)
                   ->first();
    
        if (!$like) {
            $like = Like::create([
                'user_id' => $userId,
                'post_id' => $postId,
            ]);
            return response()->json(['message' => 'Post liked successfully']);
        } else {
            $like->delete();
            return response()->json(['message' => 'Post unliked successfully']);
        }
    }
    public function mount($postId)
    {
        $this->postId = $postId;
    }
    public function render()
    {
        $post = Post::find($this->postId);
        // $totalLikes = Like::find($this->postId);
        $this->totalLikes = Like::where('post_id', $this->postId)->count('user_id');
        return view('livewire.partials.components.view-post',['post'=>$post]);
    }
}
