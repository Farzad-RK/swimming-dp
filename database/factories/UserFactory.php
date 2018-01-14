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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'role_id'=> '2'
    ];
});

$factory->define(App\Match::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'startDate'=>$faker->dateTimeThisMonth($max = 'now', $timezone = 'Asia/Tehran'),
        'endDate'=>$faker->dateTimeThisMonth($max = 'now', $timezone = 'Asia/Tehran'),
        'regStartDate'=>$faker->dateTimeThisMonth($max = 'now', $timezone = 'Asia/Tehran'),
        'regEndDate'=>$faker->dateTimeThisMonth($max = 'now', $timezone = 'Asia/Tehran'),
        'place'=>$faker->address,
        'capacity'=>$faker->numberBetween($min = 5, $max = 10),
        'gender'=> 'male',
        'registrationCost'=> '120',
        'match_type_id'=>$faker->numberBetween($min = 1, $max = 2),
    ];
});

$factory->define(App\Refree::class, function (Faker $faker) {
    static $password;

    return [
      'user_id' => function () {
         return factory(App\User::class)->create()->id;
        },
        'firstName' => $faker->firstNameMale,
        'lastName'=> $faker->lastName,
        'nationalNumber'=>$faker->ssn,
        'phoneNumber'=>'123123',
        'mobileNumber'=>'321321',
        'gender'=> 'male',
        'fatherName'=>$faker->firstNameMale,
        'address'=> $faker->address
    ];
});
