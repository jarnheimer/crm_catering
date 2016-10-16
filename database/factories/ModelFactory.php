<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->word,
        'remember_token' => str_random(10),
        'surname' => $faker->lastName,
        'patronymic' => $faker->firstName,
        'job' => 'manager',
        'username' => $faker->word,
        'active' => rand(0, 1),
        'work_hours' => rand(0, 1)
    ];
});

$factory->define(App\Models\Client::class, function (Faker\Generator $faker) {
    return [

            'user_id'      => rand(1, 100),
            'name'         => $faker->company,
            'phone_work'   => $faker->phoneNumber,
            'phone_mobile' => $faker->tollFreePhoneNumber,
            'fio'          => $faker->name,
            'job'          => $faker->jobTitle,
            'birthday'     => $faker->date('d.m.Y'),
            'email'        => $faker->email,
            'events'       => $faker->text,
            'site'         => $faker->domainName,
            'address'      => $faker->address,
            'description'  => $faker->text,
            'hobby'        => $faker->text
    ];
});

$factory->define(App\Models\Service::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'weight' => $faker->numberBetween(200, 1000),
        'price'  => $faker->randomFloat(2, 100, 2000)
    ];
});

$factory->define(App\Models\Product::class, function (Faker\Generator $faker) {
    return [
        'id'         => $faker->numberBetween(1, 1000),
        'source'     => ['file', 'hand'][rand(0, 1)],
        'section1'   => $faker->numberBetween(1, 5),
        'section2'   => $faker->numberBetween(1, 5),
        'section3'   => $faker->numberBetween(1, 5),
        'section4'   => $faker->numberBetween(1, 5),
        'kitchen_id' => $faker->numberBetween(1, 3),
        'type_id'    => $faker->numberBetween(1, 4),
        'name'       => $faker->firstName,
        'name_en'    => $faker->firstName,
        'weight'     => $faker->numberBetween(200, 1000),
        'price'      => $faker->randomFloat(2, 100, 2000)
    ];
});

$factory->define(App\Models\Kitchen::class, function (Faker\Generator $faker) {
    static $sort = 1;
    return [
        'name'   => $faker->word,
        'active' => 1,
        'sort'   => $sort++
    ];
});

$factory->define(App\Models\Type::class, function (Faker\Generator $faker) {
    static $sort = 1;
    return [
        'name'   => $faker->word,
        'active' => 1,
        'sort'   => $sort++
    ];
});

$factory->define(App\Models\Place::class, function (Faker\Generator $faker) {
    static $sort = 1;
    return [
        'name'   => $faker->address
    ];
});