<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Gallery extends Model
{
    protected $table = 'gallery';
    public $timestamps = false;
    use Translatable;
    protected $translatable = ['name'];

    public function category()
    {
        return $this->belongsTo(GalleryCategory::class, 'category_id');
    }
}
