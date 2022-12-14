<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Size extends Model
{
    use Translatable;
    protected $translatable = ['size_name'];
}
