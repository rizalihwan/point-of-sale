<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone'
    ];

    // Relation to goods model
    public function goods()
    {
        return $this->hasMany(Goods::class);
    }
}
