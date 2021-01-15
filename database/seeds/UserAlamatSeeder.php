<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class UserAlamatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      for ($i=2; $i < 12 ; $i++) {
        \App\User::where('id', $i)
                  ->update([
                    'alamat' => $faker -> address,
                    'kota' => $faker -> cityPrefix,
                    'kodePos' => $faker -> postcode,
                    'nomorTelepon' => $faker -> e164PhoneNumber,
                    'ongkir' => $faker -> numberBetween($min = 9, $max = 15)*1000,
                  ]);
      }
    }
}
