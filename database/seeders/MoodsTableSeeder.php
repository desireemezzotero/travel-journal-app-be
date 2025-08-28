<?php

namespace Database\Seeders;

use App\Models\Mood;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $moods = [
            'rilassato',
            'avventuroso',
            'romantico',
            'spensierato',
            'curioso',
            'esploratore',
            'energico',
            'felice',
            'meditativo',
            'festoso',
            'gratitudine',
            'meravigliato',
            'libero',
            'sereno',
            'nostalgico',
        ];

        foreach ($moods as $mood) {
            $newMood = new Mood();

            $newMood->title = $mood;

            $newMood->save();
        }
    }
}
