<?php

use Illuminate\Database\Seeder;

class LaptopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Laptop::class, 20)->create();
    }
}
