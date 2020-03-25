<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {

    return [
        'user_id' => $faker->word,
        'qrcode_owner_id' => $faker->word,
        'qrcode_id' => $faker->word,
        'payment_method' => $faker->word,
        'message' => $faker->text,
        'amount' => $faker->randomDigitNotNull,
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
