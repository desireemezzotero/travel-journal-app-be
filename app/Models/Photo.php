<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = ['url', 'post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
