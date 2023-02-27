<?php

namespace App\Models;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";
    protected $fillable = ['id', 'user_id', 'created_at', 'updated_at'];

    // One To Many ( Belongs To)

    public function comment(){
        return $this->hasMany(Comment::class, 'post_id');
    }

}
