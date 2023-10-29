<?php

namespace OpenAfghanistan\Provinces\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use OpenAfghanistan\Provinces\Database\Factories\ProvinceFactory;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'en_name',
    ];

    public function districts(): HasMany
    {
        return $this->hasMany(District::class);
    }

    protected static function newFactory(): ProvinceFactory
    {
        return ProvinceFactory::new();
    }
}
