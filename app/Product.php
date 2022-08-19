<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_sizes');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_colors');
    }
}
