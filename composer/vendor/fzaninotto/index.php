<?php
require_once "vendor/autoload.php";

$faker = Faker\Factory::create();

echo $faker->name;

use Carbon\Carbon;

printf("Now: %s", Carbon::now());
