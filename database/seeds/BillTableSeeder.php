<?php

use Illuminate\Database\Seeder;

class BillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Bill::class, 20)
            ->create()
            ->each(function (\App\Bill $bill) {
                factory(\App\BillDetail::class, 1)
                    ->create([
                        'bill_id' => $bill->id
                    ]);
            });
    }
}