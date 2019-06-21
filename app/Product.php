<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'text' => 'array',
        'image' => 'array'
    ];

    protected $fillable = [
        'text', 'image', 'order','family_id','subfamily_id'
    ];

    public function family() {
        return $this->belongsTo('App\Family');
    }

    public function subfamily() {
        return $this->belongsTo('App\Subfamily');
    }

}
