<?php

namespace App\Http\Controllers;

use App\Models\Mood;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $moods = Mood::all();
        $tags = Tag::all();
        $post = Post::all();
        return view('create', compact('moods', 'tags', 'post'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $newPost = new Post();

        $newPost->title = $data['title'];
        $newPost->location = $data['location'];
        $newPost->latitude = $data['latitude'];
        $newPost->longitude = $data['longitude'];
        $newPost->description = $data['description'];
        $newPost->actual_spending = $data['actual_spending'];
        $newPost->physical_effort = $data['physical_effort'];
        $newPost->economic_effort = $data['economic_effort'];
        $newPost->takeaway_positive = $data['takeaway_positive'];
        $newPost->takeaway_negative = $data['takeaway_negative'];

        $newPost->save();

        if (isset($data['mood'])) {
            $newPost->moods()->sync($data['mood']);
        }


        if (isset($data['tag'])) {
            $newPost->tags()->sync($data['tag']);
        }

        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $file) {
                if ($file->isValid()) {
                    $url = $file->store('photo', 'public');

                    // Salva immagine nel DB collegata al post
                    $newPost->photos()->create([
                        'url' => $url
                    ]);
                }
            }
        }

        return redirect()->route('post.show', [$newPost]);
    }
}
