<?php

use App\Models\Agroexpert;
use Illuminate\Database\Seeder;

class AgroexpertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Agroexpert::class, 50)->create();
    }
}
