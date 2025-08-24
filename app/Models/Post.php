<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function moods()
    {
        return $this->belongsToMany(Mood::class);
    }
}
