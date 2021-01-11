<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      for ($i=0; $i < 5; $i++) {
        \App\Categories::create([
          'name' => $faker -> word
        ]);
      }
    }
}
