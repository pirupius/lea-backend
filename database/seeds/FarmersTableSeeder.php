<?php

use App\Models\Farmer;
use Illuminate\Database\Seeder;

class FarmersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Farmer::class, 50)->create();
    }
}
