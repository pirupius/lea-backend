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
        Farmer::create([
            'name'      => 'Musa',
            'gender'    => 'Male',
            'phone'     => '0752014071',
            'email'     => 'test@endelea.com',
            'district'  => 'Masaka',
            'location'  => 'Town Council',
        ]);

        factory(Farmer::class, 30)->create();
    }
}
