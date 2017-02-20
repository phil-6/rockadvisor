<?php

use Illuminate\Database\Seeder;
use App\ClimbTypeSystem;

class ClimbTypeSystemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('climbTypeSystems')->delete();

        $rts = new ClimbTypeSystem();
        $rts->name = "British";
        $rts->save();

        $rts = new ClimbTypeSystem();
        $rts->name = "French";
        $rts->save();

        $rts = new ClimbTypeSystem();
        $rts->name = "V-Grades";
        $rts->save();

        $rts = new ClimbTypeSystem();
        $rts->name = "Font";
        $rts->save();

        $rts = new ClimbTypeSystem();
        $rts->name = "USA";
        $rts->save();

        $rts = new ClimbTypeSystem();
        $rts->name = "Australian";
        $rts->save();

        $rts = new ClimbTypeSystem();
        $rts->name = "Nordic";
        $rts->save();

        $rts = new ClimbTypeSystem();
        $rts->name = "UIAA";
        $rts->save();


    }
}
