<?php

use Illuminate\Database\Seeder;
use App\Route;

class RoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->delete();

        $r = new Route();
        $r->name = "Great Chimney";
        $r->description = "Start at the left end of the ledge at the foot of the slab. 
        Gain the chimney from the rib bounding the slab on the left and climb it, 
        taking care with blocks at the top";
        $r->length = 23;
        //$r->grade_id = ??; //vs, 4b
        $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "Honesty";
        $r->description = "Start as for Great Chimney then step onto the 
        slab at a good hold. Climb the slab just to the right of the right 
        edge of the chimney, with some unnerving moves.";
        $r->length = 18;
        //$r->grade_id = ??; //hvs, 4c
        $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "PickPocket";
        $r->description = "An artificial route directly up the slab between 
        Great Chimney and Anemone Wall. Using the crack is forbidden.";
        $r->length = 21;
        //$r->grade_id = ??; //hvs, 5b
        $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "Anemone Wall";
        $r->description = "Start where the crevasse closes and traverse left to the 
        obvious diagonal crack. When it peters out at a pocket, climb direct.";
        $r->length = 21;
        //$r->grade_id = ??; //vs, 4c
        $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "Alternate";
        $r->description = "Follow discontinuous cracks and water-worn grooves right 
        of Anemone Wall directly to the top.";
        $r->length = 18;
        //$r->grade_id = ??; //s
        $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "Respite";
        $r->description = "Start 1m right of Alternate and climb the slab direct.";
        $r->length = 18;
        //$r->grade_id = ??; //vd
        $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "Wide Crack";
        $r->description = "The wide crack to the right of Respite.";
        $r->length = 13;
        //$r->grade_id = ??; //d
        $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "Girdle Traverse";
        $r->description = "Traverse the slab from left to right along the obvious thin break.";
        $r->length = 22;
        //$r->grade_id = ??; //dhs, 4c
        $r->crag_id = 1;
        $r->save();


    }
}
