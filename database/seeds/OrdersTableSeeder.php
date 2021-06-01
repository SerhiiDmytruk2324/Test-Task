<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        for ($i = 1; $i <=200; $i++){
            $data[] = [
                'customer_id' => rand(1,50),
            ];
        }
        \DB::table('orders')->insert($data);
    }
}
