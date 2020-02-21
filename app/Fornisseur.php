<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Symfony\Component\Mime\Part\Multipart\RelatedPart;

class Fornisseur extends Model
{
    protected $fillable = [
        'id', 'name',
    ];
     protected $table="fornissuers";
    
    public function city(){

        return $this->hasOne(City::class);
    }
}
