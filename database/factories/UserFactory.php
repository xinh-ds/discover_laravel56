<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


// fzaninotto/faker/src/Faker/Provider

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Employee::class, function (Faker $faker) {
    $salaries = [1000, 1500, 2000, 2500, 3000, 4000, 5000];
    return [
        'name'         => $faker->userName,
        'address'      => $faker->address,
        'gender'       => rand(0, 1),
        'phone_number' => $faker->e164PhoneNumber,
        'salary'       => $salaries[array_rand($salaries)],
    ];
});
