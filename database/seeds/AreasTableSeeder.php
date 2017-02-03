<?php

use Illuminate\Database\Seeder;
use App\Area;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->delete();

        $a = new Area();
        $a->name = "North Gower";
        $a->save();
        
        $a = new Area();
        $a->name = "South Gower";
        $a->save();
    }
}
