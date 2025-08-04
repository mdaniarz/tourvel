<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
        'category',
        'is_active',
    ];
}
