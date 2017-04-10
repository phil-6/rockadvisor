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

        //1
        $rtn = new ClimbTypeName();
        $rtn->name = "Trad";
        $rtn->save();

        //2
        $rtn = new ClimbTypeName();
        $rtn->name = "Sport";
        $rtn->save();

        //3
        $rtn = new ClimbTypeName();
        $rtn->name = "Bouldering";
        $rtn->save();

        //4
        $rtn = new ClimbTypeName();
        $rtn->name = "Winter";
        $rtn->save();

        //5
        $rtn = new ClimbTypeName();
        $rtn->name = "Aid";
        $rtn->save();

        //6
        $rtn = new ClimbTypeName();
        $rtn->name = "Alpine";
        $rtn->save();

        //7
        $rtn = new ClimbTypeName();
        $rtn->name = "Ice";
        $rtn->save();

        //8
        $rtn = new ClimbTypeName();
        $rtn->name = "Mixed";
        $rtn->save();

        //9
        $rtn = new ClimbTypeName();
        $rtn->name = "Via Ferrata";
        $rtn->save();

        //10
        $rtn = new ClimbTypeName();
        $rtn->name = "Scrambling";
        $rtn->save();

        //11
        $rtn = new ClimbTypeName();
        $rtn->name = "Special";
        $rtn->save();

        //12
        $rtn = new ClimbTypeName();
        $rtn->name = "Other";
        $rtn->save();

        //13
        $rtn = new ClimbTypeName();
        $rtn->name = "Deep Water Solo";
        $rtn->save();


    }
}
