<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [];

//        $aName = 'Author';
        $authors[] = [
            'name'  => 'Arthur Conan Doyle',
        ];
        \DB::table('authors')->insert($authors);
    }
}
