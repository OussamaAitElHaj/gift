<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $fillable = [
        'name','color','fornisseur_id'
       ];
       public $timestamps = false;
}
