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
        $a->description = "Wales is to the right of Ireland, across some water.";
        $a->parentArea = NULL;
        $a->save();

        //Id = 2
        $a = new Area();
        $a->name = "South Wales";
        $a->description = "The bit of wales that has bigger roads.";
        $a->parentArea = 1;
        $a->save();

        //Id = 3
        $a = new Area();
        $a->name = "Gower";
        $a->description = "Gower is a peninsula in Wales. It is near Swansea. It has many scenic sights like caves.";
        $a->parentArea = 2;
        $a->save();

        //Id = 4
        $a = new Area();
        $a->name = "North Gower";
        $a->description = "The top bit of Gower, not much climbing here.";
        $a->parentArea = 3;
        $a->save();

        //Id = 5
        $a = new Area();
        $a->name = "South Gower";
        $a->description = "The lower half of Gower, loads of cliffs. Can be brittle";
        $a->parentArea = 3;
        $a->save();

        //Id = 6
        $a = new Area();
        $a->name = "Rhosilli";
        $a->description = "The crags overlook the beautiful Rhossili Bay and the Worms Head itself.";
        $a->parentArea = 5;
        $a->save();

        //Id = 7
        $a = new Area();
        $a->name = "Fall Bay to Mewslade";
        $a->description = "A beautiful and popular area, providing the greatest concentration of the best traditional routes on Gower and some of its most spectacular.";
        $a->parentArea = 5;
        $a->save();

        //Id = 8
        $a = new Area();
        $a->name = "Thurba Head to Port Eynon";
        $a->description = "Some of the most interesting crags on Gower for the middle grade climber.";
        $a->parentArea = 5;
        $a->save();

        //Id = 9
        $a = new Area();
        $a->name = "Oxwich";
        $a->description = "Oxwich Quarry is one of the major sports climbing areas of Gower, containing a large selection of fully equipped routes of most grades";
        $a->parentArea = 5;
        $a->save();

        //Id = 10
        $a = new Area();
        $a->name = "The Three Tors";
        $a->description = "Lying between Oxwich and Three Cliffs Bay are a number of agreeable cliffs. Their surrounding golden beaches, sand dunes and tussocked gorse moorland, combined with an abundance of low grade single and multi-pitch routes makes the area ideal for families, novices and solo forays.";
        $a->parentArea = 5;
        $a->save();

        //Id = 11
        $a = new Area();
        $a->name = "Three Cliffs";
        $a->description = "Three Cliffs provides Gower with its most picturesque venue";
        $a->parentArea = 5;
        $a->save();

        //Id = 12
        $a = new Area();
        $a->name = "Southgate and Pennard";
        $a->description = "Southgate and Pennard hold the best selection of sport climbs on the Gower.";
        $a->parentArea = 5;
        $a->save();

        //Id = 13
        $a = new Area();
        $a->name = "Caswell to Mumbles";
        $a->description = "Closer to Swansea, not for the self conscious climber.";
        $a->parentArea = 5;
        $a->save();

        //Id = 14
        $a = new Area();
        $a->name = "Gower Inland Crags";
        $a->description = "Gower also holds some inland quarries that can be climbed";
        $a->parentArea = 3;
        $a->save();
		
		//Id = 15
		$a = new Area();
		$a->name = "North Wales";
        $a->description = "The bit of Wales where they actually speak Welsh.";
        $a->parentArea = 1;
        $a->save();
		
		//Id = 16
		$a = new Area();
		$a->name = "Snowdonia";
        $a->description = "There are a few hills around here.";
        $a->parentArea = 15;
        $a->save();
		
		//Id = 17
		$a = new Area();
		$a->name = "Llanberis";
        $a->description = "Llanberis is Snowdon's Village at the foot of Snowdon which lies within the Snowdonia National Park.";
        $a->parentArea = 16;
        $a->save();
    }
}
