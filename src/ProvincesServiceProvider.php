<?php

namespace OpenAfghanistan\Provinces;

use Illuminate\Support\ServiceProvider;

class ProvincesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../database/migrations/create_provinces_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_provinces_table.php'),
        ], 'provinces-migration');
    }
}
