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

use Illuminate\Support\Str;

$factory->define(App\User::class, function (Faker\Generator $faker) {
	static $password;
	$lastName = $faker->lastName;
	$firstName = $faker->firstName;


	$user = [
		'slug' => Str::slug($firstName.' '.$lastName),
		'name' => $lastName,
		'first_name' => $firstName,
		'email' => $faker->unique()->safeEmail,
		'street' => $faker->streetAddress,
		'city' => $faker->city,
		'zip_code' => $faker->postcode,
		'phone_number' => $faker->phoneNumber,
		'mobile_phone' => $faker->phoneNumber,
		'pro_phone' => $faker->phoneNumber,
		'birth_city' => $faker->city,
		'birth_country' => $faker->country,
		'birthday' => $faker->date(),
		'password' => $password ?: $password = bcrypt('secret'),
		'remember_token' => str_random(10),
	];

	return $user;

});
