<?php

namespace App\Models;

use App\Models\Post;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $fillable = [
        'body', 'user_id', 'post_id'
    ];

    // Comment Belongs To Post
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    // Comment Belongs To User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
