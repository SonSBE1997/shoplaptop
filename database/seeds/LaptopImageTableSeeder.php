<?php

use Illuminate\Database\Seeder;

class LaptopImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++){
            for ($j = 1; $j <= 4 ; $j++){
                $laptop_id = $i;
                $image = $i . "_" . $j . ".jpg";
                $original = $j % 5 == 1 ? 1 : 0;
                \App\LaptopImage::create(compact('laptop_id', 'image', 'original'));
            }
        }
    }
}
