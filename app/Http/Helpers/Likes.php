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
        $totalLikes = Like::where('post_id', $postId)->count('user_id');
        return $totalLikes ? $totalLikes . ' Reacted' : '0 React';
    }

    public static function ShowHearted($userId,$postId){
        return Like::where('user_id', $userId)
                   ->where('post_id', $postId)
                   ->first();
    }
}
