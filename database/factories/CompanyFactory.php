<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use App\Contact;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'title'=>$faker->company(),
        'description'=>$faker->sentence(4),
        'contact_id'=>factory(Contact::class)->create()->id,
        'logo'=>Str::random(10),

    ];
});
