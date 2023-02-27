<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Comment;
class PostController extends Controller
{
    public function getComments(){
        
        // $result = Post::with('comment')->get();
        // foreach($result as $key => $val){
        //     $d = $val;
        // }
            
        // return Post::find(1)->comment()->where('description' , 'good effort')->first();
    }

    public function postBelongsTo(){
        //here cause retrieving data(all comments are child of the perticul post)
        //  from posts from comments
        return Comment::with('post')->get();    
    }
}
