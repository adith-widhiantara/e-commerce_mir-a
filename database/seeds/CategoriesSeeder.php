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

      for ($i=1; $i < 6; $i++) {
        $title = $faker -> sentence($nbWords = 2, $variableNbWords = true);
        $slug = Str::slug($title, '_');

        \App\Categories::where('id', $i)
                      ->update([
                        'name' => $title,
                        'slug' => $slug,
                      ]);
      }
    }
}
