<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'author_id',
        'title',
        'genre',
        'blurb',
        'content',
        'published'
    ];
}
