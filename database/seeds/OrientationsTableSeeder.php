<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 19/03/2017
 * Time: 16:05
 */

use Illuminate\Database\Seeder;
use App\Orientation;

class OrientationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orientations')->delete();

        //Id = 1
        $o = new Orientation();
        $o->name = "N";
        $o->save();
        //Id = 2
        $o = new Orientation();
        $o->name = "E";
        $o->save();
        //Id = 3
        $o = new Orientation();
        $o->name = "S";
        $o->save();
        //Id = 4
        $o = new Orientation();
        $o->name = "W";
        $o->save();
        //Id = 5
        $o = new Orientation();
        $o->name = "NNE";
        $o->save();
        //Id = 6
        $o = new Orientation();
        $o->name = "NE";
        $o->save();
        //Id = 7
        $o = new Orientation();
        $o->name = "ENE";
        $o->save();
        //Id = 8
        $o = new Orientation();
        $o->name = "ESE";
        $o->save();
        //Id = 9
        $o = new Orientation();
        $o->name = "SE";
        $o->save();
        //Id = 10
        $o = new Orientation();
        $o->name = "SSE";
        $o->save();
        //Id = 11
        $o = new Orientation();
        $o->name = "SSW";
        $o->save();
        //Id = 12
        $o = new Orientation();
        $o->name = "SW";
        $o->save();
        //Id = 13
        $o = new Orientation();
        $o->name = "WSW";
        $o->save();
        //Id = 14
        $o = new Orientation();
        $o->name = "WNW";
        $o->save();
        //Id = 15
        $o = new Orientation();
        $o->name = "NW";
        $o->save();
        //Id = 16
        $o = new Orientation();
        $o->name = "NNW";
        $o->save();
        //Id = 17
        $o = new Orientation();
        $o->name = "???";
        $o->save();
        //Id = 18
        $o = new Orientation();
        $o->name = "All";
        $o->save();







    }

}