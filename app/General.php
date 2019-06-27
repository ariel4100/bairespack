<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $casts = [
        'text' => 'array',
    ];


    protected $fillable = [
        'text','order','padre_id'
    ];

    public function family()
    {
        return $this->hasMany('App\Family');
    }


    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
