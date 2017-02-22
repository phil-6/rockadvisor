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

        //Id = 1
        $a = new Area();
        $a->name = "Wales";
        $a->parentArea = NULL;
        $a->save();

        //Id = 2
        $a = new Area();
        $a->name = "South Wales";
        $a->parentArea = 1;
        $a->save();

        //Id = 3
        $a = new Area();
        $a->name = "Gower";
        $a->parentArea = 2;
        $a->save();

        //Id = 4
        $a = new Area();
        $a->name = "North Gower";
        $a->parentArea = 3;
        $a->save();

        //Id = 5
        $a = new Area();
        $a->name = "South Gower";
        $a->parentArea = 3;
        $a->save();

        //Id = 6
        $a = new Area();
        $a->name = "Rhosilli";
        $a->parentArea = 4;
        $a->save();

        //Id = 7
        $a = new Area();
        $a->name = "Fall Bay to Mewslade";
        $a->parentArea = 4;
        $a->save();

        //Id = 8
        $a = new Area();
        $a->name = "Thurba Head to Port Eynon";
        $a->parentArea = 4;
        $a->save();

        //Id = 9
        $a = new Area();
        $a->name = "Oxwich";
        $a->parentArea = 4;
        $a->save();

        //Id = 10
        $a = new Area();
        $a->name = "The Three Tors";
        $a->parentArea = 4;
        $a->save();

        //Id = 11
        $a = new Area();
        $a->name = "Three Cliffs";
        $a->parentArea = 4;
        $a->save();

        //Id = 12
        $a = new Area();
        $a->name = "Southgate and Pennard";
        $a->parentArea = 4;
        $a->save();

        //Id = 13
        $a = new Area();
        $a->name = "Caswell to Mumbles";
        $a->parentArea = 4;
        $a->save();

        //Id = 14
        $a = new Area();
        $a->name = "Gower Inland Crags";
        $a->parentArea = 3;
        $a->save();
    }
}
