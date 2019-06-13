<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{


    protected $fillable = [
        'order','section','text','type',
    ];

    public function scopeSeccionTipo($query, $section, $type) {
        return $query->where(['section' => $section, 'type' => $type]);
    }
}
