<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
        // One To Many (Inverse) / Belongs To
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
