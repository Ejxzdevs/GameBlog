<?php

use App\Models\Like;
class Likes {
    public static function isLiked($userId,$postId)
    {
        return Like::where('user_id', $userId)
                   ->where('post_id', $postId)
                   ->exists();
     
    }
    public static function totalLikes($postId){
        return Like::where('post_id', $postId)->count('user_id');
    }

    public static function ShowHearted($userId,$postId){
        return Like::where('user_id', $userId)
                   ->where('post_id', $postId)
                   ->first();
    
    }
}
