<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class GalleryCategory extends Model
{
    public $timestamps = false;
    use Translatable;
    protected $translatable = ['name'];

    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'category_id');
    }
}
