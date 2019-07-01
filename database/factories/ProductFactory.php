<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Box;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker, $parameters) {
    return [
        'name' => isset($parameters) ? (isset($parameters['name']) ? $parameters['name'] : null) : null,
        'box_id' => factory(Box::class)->create(
        	isset($parameters) ? (isset($parameters['box']) ? $parameters['box'] : []) : []
        )->id,
    ];
});
