<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'title'=>$faker->name(),
        'phone'=>$faker->e164PhoneNumber(),
        'address'=>$faker->streetAddress(),
        'email'=>Str::random(10),
        'country'=>$faker->country(),
        'city'=>$faker->city(),
        // 'company_id'=>factory(Company::class)->create()->id



    ];
});
