<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $casts = [
        'text' => 'array',
        'image' => 'array'
    ];

    protected $fillable = [
        'order','section','text','type','image'
    ];

    public function scopeSeccionTipo($query, $section, $type) {
        return $query->where(['section' => $section, 'type' => $type]);
    }
}
