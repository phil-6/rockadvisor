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
        $a->name = "Wales";
        $a->save();

        $a = new Area();
        $a->name = "South Wales";
        $a->save();

        $a = new Area();
        $a->name = "Gower";
        $a->save();

        $a = new Area();
        $a->name = "North Gower";
        $a->save();

        $a = new Area();
        $a->name = "South Gower";
        $a->save();
        
        $a = new Area();
        $a->name = "Rhosilli";
        $a->save();

        $a = new Area();
        $a->name = "Fall Bay to Mewslade";
        $a->save();

        $a = new Area();
        $a->name = "Thurba Head to Port Eynon";
        $a->save();

        $a = new Area();
        $a->name = "Oxwich";
        $a->save();

        $a = new Area();
        $a->name = "The Three Tors";
        $a->save();

        $a = new Area();
        $a->name = "Three Cliffs";
        $a->save();

        $a = new Area();
        $a->name = "Southgate and Pennard";
        $a->save();

        $a = new Area();
        $a->name = "Caswell to Mumbles";
        $a->save();

        $a = new Area();
        $a->name = "Inland Crags";
        $a->save();
    }
}
