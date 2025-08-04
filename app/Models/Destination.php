<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'name',
        'description',
        'location',
        'address',
        'city',
        'province',
        'country',
        'image',
        'price',
        'contact_person',
        'phone',
        'is_active',
    ];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
