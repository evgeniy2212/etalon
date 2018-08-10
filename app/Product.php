<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'img', 'price', 'name',
        'short_description', 'description',
        'quantity', 'articul', 'discount',
        'sub_category_id', 'sub_category_id'
    ];

    public function category() {
        $this->hasOne('\App\Category');
    }

}
