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
        $laptopimage = [];
        for ($i =1; $i<=20; $i++){
            $arr = [
                'laptop_id' => $i,
                'image' => 'i'
            ];
        }
    }
}
