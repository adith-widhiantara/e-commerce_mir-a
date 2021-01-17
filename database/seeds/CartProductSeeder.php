<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class CartProductSeeder extends Seeder
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
        DB::table('cart_product')->insert([
          'cart_id' => $faker -> numberBetween($min = 1, $max = 30),
          'product_id' => $faker -> numberBetween($min = 1, $max = 30),
          'quantity' => $faker -> numberBetween($min = 1, $max = 6),
          'subTotalPrice' => $faker -> numberBetween($min = 1, $max = 14) * 1000,
        ]);
      }
    }
}
