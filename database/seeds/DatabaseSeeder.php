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
        factory (\App\Models\Books::class, 100)->create();
        $this->call(AuthorsTableSeeder::class);
        factory (\App\Models\Authors::class, 49)->create();
        $this->call(Books_To_AuthorsTableSeeder::class);
        factory (\App\Models\Customers::class, 50)->create();
        $this->call(OrdersTableSeeder::class);
        $this->call(Order_BooksTableSeeder::class);

    }
}
