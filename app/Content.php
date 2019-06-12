<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
<<<<<<< HEAD
    public function index($section, $type) {

    }
=======
    protected $casts = [ 
        'data' => 'array' 
        ];
    
    protected $fillable = [
        'section', 
        'data', 
    ];
>>>>>>> 9086a397c237f0f13153f80e4b14570be0f8ed5c
}
