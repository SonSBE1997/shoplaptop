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
                'name' => 'Apple',
                'created_by' => 1,
                'modify_by' => 1,
            ],
            [
                'name' => 'Asus',
                'created_by' => 1,
                'modify_by' => 1,
            ],
            [
                'name' => 'Acer',
                'created_by' => 1,
                'modify_by' => 1,
            ],
            [
                'name' => 'Dell',
                'created_by' => 1,
                'modify_by' => 1,
            ],
            [
                'name' => 'Hp',
                'created_by' => 1,
                'modify_by' => 1,
            ],
            [
                'name' => 'Lenovo',
                'created_by' => 1,
                'modify_by' => 1,
            ],
            [
                'name' => 'MSI',
                'created_by' => 1,
                'modify_by' => 1,
            ],
        ];
        foreach ($producers as $producer){
            \App\Producer::create($producer);
        }
    }
}
