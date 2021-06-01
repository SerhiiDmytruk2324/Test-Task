<?php

use Illuminate\Database\Seeder;

class Books_To_AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        for ($i = 1; $i <=50; $i++){
            $data[] = [
                'author_id' => rand(1,50),
                'book_id'   => rand(1,100),
            ];
        }
        \DB::table('books_to_authors')->insert($data);
    }
}
