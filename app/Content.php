<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $casts = [ 
        'data' => 'array' 
        ];
    
    protected $fillable = [
        'section', 
        'data', 
    ];
}
