<?php

use Illuminate\Database\Seeder;

class RouteTypeSystemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routeTypeSystems')->delete();

        $rts = new RouteTypeSystem();
        $rts->name = "British";
        $rts->save();

        $rts = new RouteTypeSystem();
        $rts->name = "French";
        $rts->save();

        $rts = new RouteTypeSystem();
        $rts->name = "V-Grades";
        $rts->save();

        $rts = new RouteTypeSystem();
        $rts->name = "Font";
        $rts->save();

        $rts = new RouteTypeSystem();
        $rts->name = "USA";
        $rts->save();

        $rts = new RouteTypeSystem();
        $rts->name = "Australian";
        $rts->save();

        $rts = new RouteTypeSystem();
        $rts->name = "Nordic";
        $rts->save();

        $rts = new RouteTypeSystem();
        $rts->name = "UIAA";
        $rts->save();


    }
}
