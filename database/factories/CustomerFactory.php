<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'username'=>'',
        'avatar'=>'',
        'phone'=>'',
        'email' => $faker->unique()->safeEmail,
        
        'password' => Hash::make('123456'),
        'remember_token' => Str::random(10),
    ];
});
