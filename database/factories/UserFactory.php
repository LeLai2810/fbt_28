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

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '123456',
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'role' => $faker->randomElement([
            'admin',
            'user',
        ]),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Activity::class, function (Faker $faker) {
    return [
        'tour_id' => App\Models\Tour::all()->random()->id,
        'content' => $faker->paragraph,
    ];
});

$factory->define(App\Models\Booking::class, function (Faker $faker) {
    return [
        'user_id' => App\Models\User::all()->random()->id,
        'tour_id' => App\Models\Tour::all()->random()->id,
        'status' => $faker->boolean,
    ];
});

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'tour_id' => App\Models\Tour::all()->random()->id,
        'name' => $faker->title,
    ];
});

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'user_id' => App\Models\User::all()->random()->id,
        'review_id' => App\Models\Review::all()->random()->id,
        'content' => $faker->paragraph,
        'reply_comment' => $faker->numberBetween(0, 100),
    ];
});

$factory->define(App\Models\Like::class, function (Faker $faker) {
    return [
        'user_id' => App\Models\User::all()->random()->id,
        'review_id' => App\Models\Review::all()->random()->id,
        'status' => $faker->boolean,
    ];
});

$factory->define(App\Models\Rating::class, function (Faker $faker) {
    return [
        'user_id' => App\Models\User::all()->random()->id,
        'tour_id' => App\Models\Tour::all()->random()->id,
        'value' => $faker->numberBetween(1, 5),
    ];
});

$factory->define(App\Models\Review::class, function (Faker $faker) {
    return [
        'user_id' => App\Models\User::all()->random()->id,
        'tour_id' => App\Models\Tour::all()->random()->id,
        'content' => $faker->paragraph,
    ];
});

$factory->define(App\Models\SocialAccount::class, function (Faker $faker) {
    return [
        'user_id' => App\Models\User::all()->random()->id,
        'provider' => $faker->randomElement([
            'facebook',
            'google',
            'twitter',
        ]),
    ];
});

$factory->define(App\Models\Tour::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
        'duration' => $faker->numberBetween(0, 10),
        'itinerary' => $faker->country,
        'start_date' => $faker->date(),
        'price' => $faker->randomFloat(2, 100, 1000),
    ];
});
