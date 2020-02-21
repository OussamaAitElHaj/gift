<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "citys";
    protected $fillable = [
        'id', 'name','fornisseur_id'
    ];

    public $timestamps = false;
}
