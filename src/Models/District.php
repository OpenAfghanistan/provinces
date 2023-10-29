<?php

namespace OpenAfghanistan\Provinces\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use OpenAfghanistan\Provinces\Database\Factories\DistrictFactory;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'en_name',
        'is_center',
        'province_id',
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
