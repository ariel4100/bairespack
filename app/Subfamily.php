<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subfamily extends Model
{
    protected $casts = [
        'text' => 'array',
        'image' => 'array'
    ];
    protected $fillable = [
        'text', 'image', 'order','general_id','family_id'
    ];

    public function family()
    {
        return $this->belongsTo('App\Family');
    }


    public function config() {
        return $this->belongsToMany('App\Config','config_subfamily','config_id','subfamily_id');
    }
}
