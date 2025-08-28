<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tags = [

            'italia',
            'europa',
            'cittàdarte',
            'borghi',
            'capitali',
            'luoghidavisitare',
            'meteitaliane',
            'viaggioculturale',
            'monumenti',
            'piazze',
            'ontheroad',
            'roadtrip',
            'escursione',
            'campeggio',
            'zainoinspalla',
            'slowtravel',

        ];

        foreach ($tags as $tag) {
            $newTags = new Tag();

            $newTags->name = $tag;

            $newTags->save();
        }
    }
}
