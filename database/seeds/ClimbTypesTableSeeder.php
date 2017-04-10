<?php

use Illuminate\Database\Seeder;
use App\ClimbType;

class ClimbTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('climbTypes')->delete();

        //British Trad id=1
        $rt = new ClimbType();
        $rt->climbTypeSystemId = 1;
        $rt->climbTypeNameId = 1;
        $rt->save();

        //French Sport id=2
        $rt = new ClimbType();
        $rt->climbTypeSystemId = 2;
        $rt->climbTypeNameId = 2;
        $rt->save();

        //V Bouldering id=3
        $rt = new ClimbType();
        $rt->climbTypeSystemId = 3;
        $rt->climbTypeNameId = 3;
        $rt->save();

        //Font Bouldering id=4
        $rt = new ClimbType();
        $rt->climbTypeSystemId = 4;
        $rt->climbTypeNameId = 3;
        $rt->save();

        //Deep Water Solo id=5
        $rt = new ClimbType();
        $rt->climbTypeSystemId = 1;
        $rt->climbTypeNameId = 13;
        $rt->save();
    }
}
