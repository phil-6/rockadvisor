<?php

use Illuminate\Database\Seeder;

class RouteTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:Table('routeType')->delete();

        //British Trad
        $rt = new RouteType();
        $rt->routeTypeSystemId = 1;
        $rt->routeTypeNameId = 1;
        $rt->save();

        //French Sport
        $rt = new RouteType();
        $rt->routeTypeSystemId = 2;
        $rt->routeTypeNameId = 2;
        $rt->save();

        //V Bouldering
        $rt = new RouteType();
        $rt->routeTypeSystemId = 3;
        $rt->routeTypeNameId = 3;
        $rt->save();

        //Font Bouldering
        $rt = new RouteType();
        $rt->routeTypeSystemId = 4;
        $rt->routeTypeNameId = 3;
        $rt->save();
    }
}
