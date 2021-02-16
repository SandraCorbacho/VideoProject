<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use database\seeders\RoleTableSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
        RoleTableSeeder::class,
        UserTableSeeder::class,
    ]);
      
    }
}
