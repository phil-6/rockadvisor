<?php

use Illuminate\Database\Seeder;
use App\ClimbTypeName;

class ClimbTypeNamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('climbTypeNames')->delete();

        $rtn = new ClimbTypeName();
        $rtn->name = "Trad";
        $rtn->save();

        $rtn = new ClimbTypeName();
        $rtn->name = "Sport";
        $rtn->save();

        $rtn = new ClimbTypeName();
        $rtn->name = "Bouldering";
        $rtn->save();

        $rtn = new ClimbTypeName();
        $rtn->name = "Winter";
        $rtn->save();

        $rtn = new ClimbTypeName();
        $rtn->name = "Aid";
        $rtn->save();

        $rtn = new ClimbTypeName();
        $rtn->name = "Alpine";
        $rtn->save();

        $rtn = new ClimbTypeName();
        $rtn->name = "Ice";
        $rtn->save();

        $rtn = new ClimbTypeName();
        $rtn->name = "Mixed";
        $rtn->save();

        $rtn = new ClimbTypeName();
        $rtn->name = "Via Ferrata";
        $rtn->save();

        $rtn = new ClimbTypeName();
        $rtn->name = "Scrambling";
        $rtn->save();

        $rtn = new ClimbTypeName();
        $rtn->name = "Special";
        $rtn->save();

        $rtn = new ClimbTypeName();
        $rtn->name = "Other";
        $rtn->save();


    }
}
