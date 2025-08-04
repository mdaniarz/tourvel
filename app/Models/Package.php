<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'description',
        'destination_id',
        'duration',
        'price',
        'image',
        'facilities',
        'itinerary',
        'quota',
        'departure_date',
        'is_active',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
