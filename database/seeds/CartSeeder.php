<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      for ($i=1; $i < 31; $i++) {
        \App\Cart::create([
          'user_id' => $faker -> numberBetween($min = 2, $max = 11),
          'product_id' => $i,
          'buyStock' => $faker -> numberBetween($min = 1, $max = 5),
          'status' => $faker -> numberBetween($min = 1, $max = 6),
          'totalPrice' => $faker -> numberBetween($min = 1, $max = 9) * 1000,
        ]);
      }
    }
}
