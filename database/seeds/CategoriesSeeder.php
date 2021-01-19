<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Str;

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

      for ($i=1; $i < 8; $i++) {

        \App\Categories::where('id', $i)
                      ->update([
                        'color' => $faker -> hexcolor,
                      ]);
      }
    }
}
