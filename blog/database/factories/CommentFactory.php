<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
      'author' => $faker->name,
      'email' => $faker->freeEmail,
      'content' => $faker->paragraph(4),
      'post_id' => $faker->randomDigitNotNull
    ];
});
