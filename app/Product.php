<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Product extends Model
{
    use Translatable;
    protected $translatable = ['name', 'brief', 'description'];

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_sizes');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_colors');
    }
}
