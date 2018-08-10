<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function products() {
        $this->belongsTo('\App\Product');
    }
}
