<?php

namespace ElFactory\AfghanistanProvinces\Models;

use ElFactory\AfghanistanProvinces\Database\Factories\ProvinceFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    protected $fillable = [
        'name',
        'en_name'
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