<?php

use Illuminate\Database\Seeder;

class LaptopConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\LaptopConfig::class, 20)->create();
    }
}
