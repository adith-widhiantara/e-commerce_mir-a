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

      for ($i=1; $i < 30; $i++) {
        \App\Cart::where('id', $i)
                ->update([
                  'pengiriman' => 'JNE',
                ]);

        // \App\Cart::create([
        //   'user_id' => $faker -> numberBetween($min = 2, $max = 11),
        //   'status' => $faker -> numberBetween($min = 1, $max = 6),
        //   'totalPrice' => $faker -> numberBetween($min = 1, $max = 9) * 1000,
        //   'buktiTransfer' => "avatar.png",
        //   'resi' => $faker -> creditCardNumber,
        // ]);
      }
    }
}
