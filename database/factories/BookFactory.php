<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Book;
use Faker\Generator as Faker;


$factory->define(Book::class, function (Faker $faker) {
    return [
        'name' =>$faker->name(),
        'tel' => '08011112222',
        'date' =>$faker->date('Y-m-d',$max='now'),
        'time' =>$faker->time('H:i', $max='now'),
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
    ];
});
