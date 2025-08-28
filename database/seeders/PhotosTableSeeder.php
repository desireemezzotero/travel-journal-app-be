<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $photos =  [
            [
                'post_id' => 1,
                'type' => 'photo',
                'url' => 'https://letsenhance.io/it',
            ],
            [
                'post_id' => 2,
                'type' => 'video',
                'url' => 'https://www.youtube.com/watch?v=PyokOW8tLJU',
            ],
        ];

        foreach ($photos as $photo) {
            $newPhoto = new Photo();

            $newPhoto->post_id = $photo['post_id'];
            $newPhoto->type = $photo['type'];
            $newPhoto->url = $photo['url'];

            $newPhoto->save();
        }
    }
}
