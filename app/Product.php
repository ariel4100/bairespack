<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'text' => 'array',
        'image' => 'array',
        'planos' => 'array'
    ];

    protected $fillable = [
        'text', 'image', 'order','family_id','subfamily_id','planos'
    ];

    public function general()
    {
        return $this->belongsTo('App\General');
    }

    public function family() {
        return $this->belongsTo('App\Family');
    }

    public function subfamily() {
        return $this->belongsTo('App\Subfamily');
    }

    public function related() {
        return $this->belongsToMany('App\Product','related_products','product_id','related_id');
    }

    public function related_accesorio() {
        return $this->belongsToMany('App\Product','related_accesorios','product_id','related_id');
    }

    public function configuraciones()
    {
        return $this->hasMany('App\Config');
    }

    public function config() {
        return $this->belongsToMany('App\Config','config_products');
    }
}
