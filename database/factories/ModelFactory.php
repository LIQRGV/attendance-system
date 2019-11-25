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
if (!$factory instanceof \Illuminate\Database\Eloquent\Factory) {
    throw new Exception("Factory is not Eloquent Factory");
}

$factory->define(\App\Models\Attendance::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(\App\Models\Course::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word
    ];
});

$factory->define(\App\Models\LectureTime::class, function (Faker\Generator $faker) {
    return [
        'time' => $faker->time()
    ];
});

$factory->define(\App\Models\Schedule::class, function (Faker\Generator $faker) {
    return [
        'date' => $faker->date()
    ];
});

$factory->define(\App\Models\Student::class, function (Faker\Generator $faker) {
    return [
        'student_id_number' => $faker->randomNumber(8),
        'name' => $faker->word,
    ];
});

$factory->define(\App\Models\Teacher::class, function (Faker\Generator $faker) {
    return [
        'teacher_id_number' => $faker->randomNumber(8),
        'name' => $faker->word,
    ];
});
