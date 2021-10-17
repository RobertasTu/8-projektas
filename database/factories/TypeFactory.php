<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Type;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Company;

$factory->define(Type::class, function (Faker $faker) {
    return [
        'title'=>Str::random(8),
        'description'=>$faker->sentence(4),
        'company_id'=>factory(Company::class)->create()->id
    ];
});
