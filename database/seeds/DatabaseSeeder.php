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
        $this->call(UsersTableSeeder::class);
        $this->call(FarmersTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(AgroexpertsTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(FarmerGroupTableSeeder::class);
        $this->call(NewsTableSeeder::class);
    }
}
