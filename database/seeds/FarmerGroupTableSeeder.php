<?php

use App\Models\Group;
use App\Models\Farmer;
use Illuminate\Database\Seeder;

class FarmerGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('farmer_group')->truncate();

        foreach(Group::all() as $group){
            for ($k = 0 ; $k < rand(4, 15); $k++){
                $farmer = Farmer::inRandomOrder()->first();
                $group->members()->syncWithoutDetaching([$farmer->id]);
                self::addRepresentativeTitles($farmer, $group);
            }
        }
    }

    public function addRepresentativeTitles($farmer, $group){
        $titles = ["","","","","","", "Chairman", "Secretary", "Treasurer", "Mobilizer"];
        $random_title = $titles[array_rand($titles)];
        $group->members()
              ->updateExistingPivot($farmer->id, [
                  'representative_title' => $random_title
              ]);
    }
}
