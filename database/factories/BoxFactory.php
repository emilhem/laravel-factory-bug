<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Box;
use Faker\Generator as Faker;

$factory->define(Box::class, function (Faker $faker, $parameters) {
    return [
        'name' => isset($parameters) ? (isset($parameters['name']) ? $parameters['name'] : null) : null,
    ];
});
