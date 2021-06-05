<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getAllPosts(){
        return Post::all();
    }

    public function savePost(){
        request() -> validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        return Post::create([
            'title' => request('title'),
            'content' => request('content')
        ]);
    }

    public function editPost(Post $post){
        request() -> validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        
        $success = $post -> update([
            'title' => request('title'),
            'content' => request('content')
        ]);
    
        return [
            'success' => $success
        ];
    }

    public function deletePost(Post $post){
        $success = $post -> delete();

        return [
            'success' => $success
        ];

    }

}
