<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class CategoriesProductSeeder extends Seeder
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
        DB::table('categories_product')->insert([
          'product_id' => $faker -> numberBetween($min = 1, $max = 30),
          'Categories_id' => $faker -> numberBetween($min = 1, $max = 5),
        ]);
      }
    }
}
