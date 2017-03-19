<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 19/03/2017
 * Time: 16:49
 */

use Illuminate\Database\Seeder;
use App\RockType;

class RockTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rockTypes')->delete();


        //Id = 1
        $rt = new RockType();
        $rt->name = "Unknown";
        $rt->save();
        //Id = 2
        $rt = new RockType();
        $rt->name = "Limestone";
        $rt->save();
        //Id = 3
        $rt = new RockType();
        $rt->name = "Slate";
        $rt->save();
        //Id = 4
        $rt = new RockType();
        $rt->name = "Granite";
        $rt->save();
        //Id = 5
        $rt = new RockType();
        $rt->name = "Gritstone";
        $rt->save();
        //Id = 6
        $rt = new RockType();
        $rt->name = "Rhyolite";
        $rt->save();
        //Id = 7
        $rt = new RockType();
        $rt->name = "Sandstone (soft)";
        $rt->save();
        //Id = 8
        $rt = new RockType();
        $rt->name = "Sandstone (hard)";
        $rt->save();






    }

}