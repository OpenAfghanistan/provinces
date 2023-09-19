<?php

namespace ElFactory\AfghanistanProvinces\Models;

use ElFactory\AfghanistanProvinces\Database\Factories\DistrictFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class District extends Model
{

    protected $fillable = [
        'name',
        'en_name',
        'province_id'
    ];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    protected static function newFactory(): DistrictFactory
    {
        return DistrictFactory::new();
    }
}