<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      for ($i=0; $i < 30; $i++) {
        $name = $faker->sentence(3);
        $slug = Str::slug($name, '-');

        \App\Product::create([
          'name' => $name,
          'slug' => $slug,
          'desc' => $faker->sentence(10),
          'stock' => $faker -> randomDigit,
          'price' => $faker -> randomDigit * 1000,
          'sold' => $faker -> randomDigit,
          'weight' => $faker -> numberBetween($min = 1, $max = 9) * 100,
          'status' => 1,
        ]);
      }
    }
}
