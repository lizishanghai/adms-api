<?php

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Car::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Car::create([
                'name' => $faker->numerify('X ###'),
                'year' => $faker->year($max = 'now'),
                'brand' => array_random(['BMW', 'FORD', 'TOYOTA', 'AUDI']),
                'entryDate' => $faker->date($format = 'Y-m-d', $max = 'now') ,
                'booked' => $faker->boolean,
                'price' => $faker->numberBetween($min = 50000, $max = 200000),
                'discount' => $faker->numberBetween($min = 10000, $max = 30000),
                'color' => array_random(['RED', 'BLACK', 'WHITE', 'BLUE']),
                'trim' => $faker->text,
                'images' => $faker->imageUrl($width = 640, $height = 480),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
            ]);
        }
    }
}
