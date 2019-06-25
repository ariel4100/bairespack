<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{

    protected $casts = [
        'text' => 'array',
        'image' => 'array'
    ];

    protected $fillable = [
        'text', 'image', 'order','product_id'
    ];


    public function product() {
        return $this->belongsToMany('App\Product','config_products');
    }

    public function productos()
    {
        return $this->belongsTo('App\Product');
    }
}
