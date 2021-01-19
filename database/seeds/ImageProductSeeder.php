<?php

use Illuminate\Database\Seeder;

class ImageProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 5; $i++) {
        App\ImageProduct::create([
          'product_id' => 32,
          'name' => "testing.jpg"
        ]);
      }
    }
}
