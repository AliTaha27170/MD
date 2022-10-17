<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function brand()
    {
        return $this->belongsTo(Brand::class , 'ItemBrand_');
    }
}
