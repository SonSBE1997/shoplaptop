<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             UserTableSeeder::class,
             CustomerTableSeeder::class,
             RamTableSeeder::class,
             ProducerTableSeeder::class,
             CpuTableSeeder::class,
             LaptopConfigTableSeeder::class,
             LaptopTableSeeder::class,
         ]);

    }
}
