<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Json extends Model
{
    protected $fillable = [
        'confirmed', 'deaths', 'recovered','id',
    ];
}
