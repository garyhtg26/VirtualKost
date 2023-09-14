<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    protected $fillable = [
        'kost_title',
        'kost_type',
        'kost_address',
        'kost_city',
        'kost_price',
        'kost_facilities',
        'virtual_embed',
        'others',
        'gmaps_location',
        'thumbnail_image'
    ];
}
