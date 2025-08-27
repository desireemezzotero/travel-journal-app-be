<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts =  [
            [
                'title' =>  'Albania',
                'location' => 'Saranda',
                'latitude' => '39.862087',
                'longitude' => '20.026932',
                'description' => 'viaggio tra amici alla scoperta di Saranda',
                'actual_spending' => '200',
                'physical_effort' => '3',
                'economic_effort' => '2',
                'takeaway_positive' => 'esperienza bella',
                'takeaway_negative' => 'troppe salite'
            ],
            [
                'title' =>  'Albania',
                'location' => 'Valona',
                'latitude' => '19.491377',
                'longitude' => '40.466409',
                'description' => 'viaggio tra amici alla scoperta di Valona',
                'actual_spending' => '50',
                'physical_effort' => '2',
                'economic_effort' => '1',
                'takeaway_positive' => 'esperienza bella',
                'takeaway_negative' => 'cibo non buono'
            ]
        ];

        foreach ($posts as $post) {
            $newPost = new Post();

            $newPost->title = $post['title'];
            $newPost->location = $post['location'];
            $newPost->latitude = $post['latitude'];
            $newPost->longitude = $post['longitude'];
            $newPost->description = $post['description'];
            $newPost->actual_spending = $post['actual_spending'];
            $newPost->physical_effort = $post['physical_effort'];
            $newPost->economic_effort = $post['economic_effort'];
            $newPost->takeaway_positive = $post['takeaway_positive'];
            $newPost->takeaway_negative = $post['takeaway_negative'];

            $newPost->save();
        }
    }
}
