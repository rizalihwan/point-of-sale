<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $fillable = [
        'merk'
    ];

     // Relation to goods model
     public function goods()
     {
         return $this->hasMany(Goods::class);
     }
}
