<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $casts = [
        'text' => 'array',
        'image' => 'array',
        'plans' => 'array'
    ];

    protected $fillable = [
        'text', 'image', 'order','general_id','plans'
    ];

    public function general()
    {
        return $this->belongsTo('App\General');
    }

    public function subfamily()
    {
        return $this->hasMany('App\Subfamily');
    }
    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
