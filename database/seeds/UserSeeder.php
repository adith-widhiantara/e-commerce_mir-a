<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      for ($i=0; $i < 10; $i++) {
        \App\User::create([
          'name' => $faker -> name,
          'email' => $faker -> freeEmail,
          'password' => Hash::make('123123123'),
          'alamat' => $faker -> address,
          'kota' => $faker -> cityPrefix,
          'kodePos' => $faker -> postcode,
          'nomorTelepon' => $faker -> e164PhoneNumber,
          'ongkir' => $faker -> numberBetween($min = 9, $max = 15)*1000,
        ]);
      }
    }
}
