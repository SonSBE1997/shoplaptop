<?php

use Illuminate\Database\Seeder;

class ProducerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $producers = [
            [
                'name' => 'Apple'
            ],
            [
                'name' => 'Asus'
            ],
            [
                'name' => 'Acer'
            ],
            [
                'name' => 'Dell'
            ],
            [
                'name' => 'Hp'
            ],
            [
                'name' => 'Lenovo'
            ],
            [
                'name' => 'MSI'
            ],
        ];
        foreach ($producers as $producer){
            \App\Producer::create($producer);
        }
    }
}
