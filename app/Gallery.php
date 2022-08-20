<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(GalleryCategory::class, 'category_id');
    }
}
