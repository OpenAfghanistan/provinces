# Laravel Package: Afghanistan Provinces & Districts

NOTE: The pacakge is not ready for production.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/open-afghanistan/provinces.svg?style=flat-square)](https://packagist.org/packages/open-afghanistan/provinces)
[![Total Downloads](https://img.shields.io/packagist/dt/open-afghanistan/provinces?style=flat-square)](https://packagist.org/packages/open-afghanistan/provinces)
[![Repo Size](https://img.shields.io/github/repo-size/open-afghanistan/provinces?style=flat-square)](https://packagist.org/packages/open-afghanistan/provinces)
[![Repo Size](https://img.shields.io/packagist/l/open-afghanistan/provinces?style=flat-square)](https://packagist.org/packages/open-afghanistan/provinces)


**Introduction:**

The Laravel package "afghanistan-provinces" provides essential resources for managing Afghanistan's provinces and districts within your Laravel application. This package includes models, migrations, seeders, and factories to facilitate the integration of Afghanistan's administrative divisions into your project.

**Requirements:**

To use this package, ensure your Laravel application meets the following requirements:

- PHP 8.1 or higher
- Laravel 9 or higher

**Installation:**

You can effortlessly install the "afghanistan-provinces" package using Composer. Open your terminal and run the following command:

```bash
composer require open-afghanistan/afghanistan-provinces
```

**Migrations:**

After successful installation, you need to publish the migration files. Use the following Artisan command:

```bash
php artisan vendor:publish --tag=provinces-migrations
```

This command will generate a migration file that sets up the necessary tables for provinces and districts in your database.

**Seeders:**

The package includes a handy `ProvincesSeeder` that populates all 34 Afghanistan provinces along with their respective districts. You can call this seeder in your project's database seeder file as follows:

```php
// DatabaseSeeder.php

use OpenAfghanistan\Provinces\Database\Seeders\ProvincesSeeder;

$this->call(ProvincesSeeder::class);
```

If you only wish to seed specific provinces, you can call their individual seeder classes:

```php
// DatabaseSeeder.php

use OpenAfghanistan\Provinces\Database\Seeders\KabulProvinceSeeder;

$this->call(KabulProvinceSeeder::class);
```

**Factories:**

To facilitate testing, this package provides factories for both provinces and districts. You can create instances of these models in your tests with ease:

For provinces:

```php
use OpenAfghanistan\Provinces\Models\Province;

Province::factory()->create();
```

For districts:

```php
use OpenAfghanistan\Provinces\Models\District;

District::factory()->create();
```

**Contribution Guide:**

We welcome contributions to enhance this package. If you'd like to contribute by adding districts to any province, specific seeder files are available for each province to simplify the process.
Please run the `./vendor/bin/pint` command before you push any piece of code.

**License:**

The "afghanistan-provinces" package is open-source software distributed under the [MIT License](https://opensource.org/licenses/MIT). You are free to use and modify it to suit your project's requirements.

Feel free to utilize this package to manage Afghanistan's administrative divisions effortlessly in your Laravel application.
