<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Service extends Model
{
    use Translatable;
    public $timestamps = false;
    protected $translatable = ['name', 'brief', 'paragraph1','paragraph2'];

}
