<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class GalleryCategory extends Model
{
    public $timestamps = false;

    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'category_id');
    }
}
