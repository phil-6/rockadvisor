<?php

use Illuminate\Database\Seeder;

class RouteTypeNameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routeTypeNames')->delete();

        $rtn = new RouteTypeName();
        $rtn->name = "Trad";
        $rtn->save();

        $rtn = new RouteTypeName();
        $rtn->name = "Sport";
        $rtn->save();

        $rtn = new RouteTypeName();
        $rtn->name = "Bouldering";
        $rtn->save();

        $rtn = new RouteTypeName();
        $rtn->name = "Winter";
        $rtn->save();

        $rtn = new RouteTypeName();
        $rtn->name = "Aid";
        $rtn->save();

        $rtn = new RouteTypeName();
        $rtn->name = "Alpine";
        $rtn->save();

        $rtn = new RouteTypeName();
        $rtn->name = "Ice";
        $rtn->save();

        $rtn = new RouteTypeName();
        $rtn->name = "Mixed";
        $rtn->save();

        $rtn = new RouteTypeName();
        $rtn->name = "Via Ferrata";
        $rtn->save();

        $rtn = new RouteTypeName();
        $rtn->name = "Scrambling";
        $rtn->save();

        $rtn = new RouteTypeName();
        $rtn->name = "Special";
        $rtn->save();

        $rtn = new RouteTypeName();
        $rtn->name = "Other";
        $rtn->save();


    }
}
