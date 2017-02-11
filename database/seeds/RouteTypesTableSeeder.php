<?php

use Illuminate\Database\Seeder;
use App\RouteType;

class RouteTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routeTypes')->delete();

        //British Trad id=1
        $rt = new RouteType();
        $rt->routeTypeSystemId = 1;
        $rt->routeTypeNameId = 1;
        $rt->save();

        //French Sport id=2
        $rt = new RouteType();
        $rt->routeTypeSystemId = 2;
        $rt->routeTypeNameId = 2;
        $rt->save();

        //V Bouldering id=3
        $rt = new RouteType();
        $rt->routeTypeSystemId = 3;
        $rt->routeTypeNameId = 3;
        $rt->save();

        //Font Bouldering id=4
        $rt = new RouteType();
        $rt->routeTypeSystemId = 4;
        $rt->routeTypeNameId = 3;
        $rt->save();
    }
}
