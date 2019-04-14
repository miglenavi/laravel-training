<?php

use Faker\Generator as Faker;

$factory->define(App\File::class, function (Faker $faker) {
    return [
      'filename' => $faker->sentence(4),
      'size' => $faker->randomDigitNotNull,
      'post_id' => $faker->randomDigitNotNull
    ];
});
