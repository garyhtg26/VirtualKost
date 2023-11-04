<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kost extends Model
{
    protected $fillable = [
        'user_id',
        'kost_title',
        'kost_type',
        'kost_address',
        'kost_subdistrict',
        'kost_city',
        'kost_province',
        'kost_price',
        'kost_facilities',
        'virtual_embed',
        'others',
        'gmaps_location',
        'latitude',
        'longitude',
        'thumbnail_image'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
