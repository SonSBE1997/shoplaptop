<?php

use Illuminate\Database\Seeder;

class RamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $memory_capacities = [4, 8, 16, 32];
        $types = ['DDR3', 'DDR4'];
        $buses = [1333, 1600, 2133, 2400, 2666];
        foreach ($memory_capacities as $memory_capacity){
            foreach ($types as $type){
                foreach ($buses as $bus) {
                    \App\Ram::create(compact('memory_capacity', 'type', 'bus'));
                }
            }
        }
    }
}
