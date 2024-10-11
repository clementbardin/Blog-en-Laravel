<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use View;

class PostController extends Controller
{
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest()->paginate(5)
        ]);
    }
    
    public function show(Post $post){
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}