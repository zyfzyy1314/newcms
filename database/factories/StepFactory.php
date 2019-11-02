<?php

use Faker\Generator as Faker;
use App\Task;

$factory->define(App\Step::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence(),
        'complete' =>rand(0,1),
        'task_id'=>Task::all()->random()->id
    ];
});
