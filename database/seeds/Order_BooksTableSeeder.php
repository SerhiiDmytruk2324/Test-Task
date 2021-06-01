<?php

use Illuminate\Database\Seeder;

class Order_BooksTableSeeder extends Seeder
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
                'order_id' => rand(1,200),
                'book_id' => rand(1,100),
            ];
        }
        \DB::table('order_books')->insert($data);
    }
}
