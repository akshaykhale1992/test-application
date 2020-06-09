<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name'               => $faker->name,
        'email'              => $faker->unique()->safeEmail,
        'mobile'             => substr(str_shuffle("0123456789"), 0, 10),
        'birthday'           => now(),
        'gender'             => (['male', 'female'])[rand(0, 1)],
        'state_id'           => rand(1, 36),
        'city_id'            => rand(1, 4),
        'email_verified_at'  => now(),
        'education'          => 'Bsc (I.T.)',
        'year_of_completion' => '2012',
        'profile_picture'    => '',
        'skill'             => 'PHP',
        'certificate_file'  => 'php_certificate',
        'profession'         => (['salaried', 'self_employed'])[rand(0, 1)],
        'company_name'       => $faker->name,
        'joining_date'       => now(),
        'business_name'      => null,
        'location'           => null,
    ];
});
