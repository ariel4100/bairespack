<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subfamily extends Model
{
    protected $fillable = [
        'text', 'image', 'order','general_id','family_id'
    ];
}
