<?php

namespace App\Http\Controllers;

use App\Models\Mood;
use App\Models\Post as ModelsPost;
use Illuminate\Http\Request;

class Post extends Controller
{
    public function index()
    {
        $posts = ModelsPost::with('moods', 'tags', 'photos')->get();

        return view('welcome', compact('posts'));
    }
}
