<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $casts = [
        'text' => 'array',
        'video' => 'array'
    ];

    protected $fillable = [
        'text', 'video','order'
    ];
}
