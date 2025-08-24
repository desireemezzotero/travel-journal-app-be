<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mood extends Model
{
    public function posts()
    {
        $this->belongsToMany(Post::class);
    }
}
