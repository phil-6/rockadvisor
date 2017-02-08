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
        $a->area_id = NULL;
        $a->save();

        $a = new Area();
        $a->name = "South Wales";
        $a->area_id = 1;
        $a->save();

        $a = new Area();
        $a->name = "Gower";
        $a->area_id = 2;
        $a->save();

        $a = new Area();
        $a->name = "North Gower";
        $a->area_id = 3;
        $a->save();

        $a = new Area();
        $a->name = "South Gower";
        $a->area_id = 3;
        $a->save();
        
        $a = new Area();
        $a->name = "Rhosilli";
        $a->area_id = 4;
        $a->save();

        $a = new Area();
        $a->name = "Fall Bay to Mewslade";
        $a->area_id = 4;
        $a->save();

        $a = new Area();
        $a->name = "Thurba Head to Port Eynon";
        $a->area_id = 4;
        $a->save();

        $a = new Area();
        $a->name = "Oxwich";
        $a->area_id = 4;
        $a->save();

        $a = new Area();
        $a->name = "The Three Tors";
        $a->area_id = 4;
        $a->save();


        $a = new Area();
        $a->name = "Three Cliffs";
        $a->area_id = 4;
        $a->save();

        $a = new Area();
        $a->name = "Southgate and Pennard";
        $a->area_id = 4;
        $a->save();

        $a = new Area();
        $a->name = "Caswell to Mumbles";
        $a->area_id = 4;
        $a->save();

        $a = new Area();
        $a->name = "Inland Crags";
        $a->area_id = 2;
        $a->save();
    }
}
