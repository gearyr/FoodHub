<?php

namespace Database\Seeders;

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
       $this->call(PublisherSeeder::class);
       $this->call(BookSeeder::class);
       $this->call(CategorySeeder::class);
       $this->call(BookCategorySeeder::class);
    }
}
