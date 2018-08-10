<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['name'];

    public $timestamps = true;

    protected $table = 'sub_categories';

}
