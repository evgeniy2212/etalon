<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitCounter extends Model
{
    protected $fillable = ['ip_visitor'];

    protected $dateFormat = 'Y-m-d';

    public $timestamps = true;
}
