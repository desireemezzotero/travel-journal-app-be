<?php

namespace Database\Seeders;

use App\Models\Mood;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsMoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        $moods = Mood::all();

        foreach ($posts as $post) {

            $post->moods()->attach(
                $moods->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
