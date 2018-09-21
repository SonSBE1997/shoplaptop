<?php

use Illuminate\Database\Seeder;

class BillDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\BillDetail::class, 40)->create();
    }
}
