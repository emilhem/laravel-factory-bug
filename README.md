# laravel-factory-bug

## Description
This repo is used to determine whether the factory error is indeed a bug.

To test it:
1. Clone repo
2. Run `composer install`
3. Configure a `.env` file with Postgresql
3. Run `vendor/bin/phpunit`
4. Watch explosions (or turn away, like they do in the movies)

### Changed/created files from a clean laravel new
* [`app/Box.php`](app/Box.php)
* [`app/Product.php`](app/Product.php)
* [`database/factories/BoxFactory.php`](database/factories/BoxFactory.php)
* [`database/factories/ProductFactory.php`](database/factories/ProductFactory.php)
* [`database/migrations/2019_07_01_071810_create_boxes_table.php`](database/migrations/2019_07_01_071810_create_boxes_table.php)
* [`database/migrations/2019_07_01_071821_create_products_table.php`](database/migrations/2019_07_01_071821_create_products_table.php)
* [`tests/Feature/BoxProductTest.php`](tests/Feature/BoxProductTest.php)

## License
The Unlicense

A lot of code is boilerplate from running `laravel new`
