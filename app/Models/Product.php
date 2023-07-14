<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//    protected $casts = [
//      'images' => 'array'
//    ];

    public static function boot(){
        parent::boot();
        static::saving(function ($product){
            $product->slug = \Str::slug($product->name_uz);
        });
    }
}
