<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('moods', 'tags', 'photos')->get();

        return view('welcome', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('show', compact('post'));
    }

    public function create()
    {
        return view('create');
    }
}
