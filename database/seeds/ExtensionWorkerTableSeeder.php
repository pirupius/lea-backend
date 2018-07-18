<?php

use Illuminate\Database\Seeder;

class ExtensionWorkerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ExtensionWorker::class, 20)->create();
    }
}
