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
        //$r->topo_id = ??;
        $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "Honesty";
        $r->description = "Start as for Great Chimney then step onto the 
        slab at a good hold. Climb the slab just to the right of the right 
        edge of the chimney, with some unnerving moves.";
        $r->length = 18;
        //$r->grade_id = ??; //hvs, 4c
        //$r->topo_id = ??; 
        $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "PickPocket";
        $r->description = "An artificial route directly up the slab between 
        Great Chimney and Anemone Wall. Using the crack is forbidden.";
        $r->length = 21;
        //$r->grade_id = ??; //hvs, 5b
        //$r->topo_id = ??; 
		 $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "Anemone Wall";
        $r->description = "Start where the crevasse closes and traverse left to the 
        obvious diagonal crack. When it peters out at a pocket, climb direct.";
        $r->length = 21;
        //$r->grade_id = ??; //vs, 4c
        //$r->topo_id = ??; 
		 $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "Alternate";
        $r->description = "Follow discontinuous cracks and water-worn grooves right 
        of Anemone Wall directly to the top.";
        $r->length = 18;
        //$r->grade_id = ??; //s
        //$r->topo_id = ??; 
		 $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "Respite";
        $r->description = "Start 1m right of Alternate and climb the slab direct.";
        $r->length = 18;
        //$r->grade_id = ??; //vd
        //$r->topo_id = ??; 
		 $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "Wide Crack";
        $r->description = "The wide crack to the right of Respite.";
        $r->length = 13;
        //$r->grade_id = ??; //d
        //$r->topo_id = ??; 
		 $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "Girdle Traverse";
        $r->description = "Traverse the slab from left to right along the obvious thin break.";
        $r->length = 22;
        //$r->grade_id = ??; //dhs, 4c
        //$r->topo_id = ??; 
		 $r->crag_id = 1;
        $r->save();

        $r = new Route();
        $r->name = "Jap's Eye";
        $r->description = "The first short route up the slab has a tricky finish.";
        $r->length = 12;
        //$r->grade_id = ??; //6a
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Route();
        $r->name = "Cheesy Flaps";
        $r->description = "The line to the right of Jap’s Eye. Easy climbing to a slightly harder finish.";
        $r->length = 13;
        //$r->grade_id = ??; //5
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Route();
        $r->name = "Double Dutch";
        $r->description = "The slab to the right of Cheesy Flaps has a very hard start and a hard finish. The holes are off route!";
        $r->length = 15;
        //$r->grade_id = ??; //6c+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Route();
        $r->name = "Mister Polite Goad";
        $r->description = "A hard move up to the first hole with easier climbing at the finish.";
        $r->length = 15;
        //$r->grade_id = ??; //6c+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Route();
        $r->name = "Miss You";
        $r->description = "The start of the quality climbing on the slab. A tricky move at the start, an easier middle section with some interesting moves at the last two staples.";
        $r->length = 17;
        //$r->grade_id = ??; //6b+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Route();
        $r->name = "Rotbeest";
        $r->description = "The first route on the continuous area of slab has a hideous move at two-thirds height which may prove even more stressful as the route has \"lost\" its bolt hangers.";
        $r->length = 17;
        //$r->grade_id = ??; //7b+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Route();
        $r->name = "Wandelanden Tak";
        $r->description = "The next line on the slab, starting above a pile of stones and a big stick. A technical start leads to a tricky section to gain the fifth BR, then step right from the good edge to join Geef Onze Fietsen Terug. Lower off the twin BB.";
        $r->length = 17;
        //$r->grade_id = ??; //7a+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Route();
        $r->name = "Geef Onze Fietsen Terug! ";
        $r->description = "The first long long route that swaggers up the biggest section of unbroken slabs. Take a lot of quickdraws. Startwhere a pile of bicycles used to be (!) at the base of the crag (about 4m right of Wandelanden Tak) and make this and continue up to the BB by the long hole at 50m. Abseil off. N.B. The second pitch has seen some re-equipping of the crumbled bolt hangers and final belay.Watch rope length when lowering off!!";
        $r->length = 50;
        //$r->grade_id = ??; //6c+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Route();
        $r->name = "Stoeipoesje";
        $r->description = "Marginally more run out than the other routes - the slab right of Geef Onze Fietsen Terug to a BB at18m.";
        $r->length = 18;
        //$r->grade_id = ??; //6c+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Route();
        $r->name = "Wij Zitten Nog In Een Sneeuwstorm";
        $r->description = "The slab to the right of Stoeipoesje and left of the groove, to a scoop at 18m. Step right to the belay of the next route. Sustained at this grade with some quality moves!";
        $r->length = 18;
        //$r->grade_id = ??; //6b+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Route();
        $r->name = "Stinking Of Fish";
        $r->description = "The crack in the slab right of Wij Zitten Nog In Een Sneeuwstorm to join and finish up Telefunken U47. 8 is no longer needed to protect the entry to the groove,fully bolted but no one will \"tell\" if you take some wires for practice.";
        $r->length = 18;
        //$r->grade_id = ??; //6a+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Route();
        $r->name = "Telefunken U47";
        $r->description = "The obvious groove to a BB at 18m.";
        $r->length = 18;
        //$r->grade_id = ??; //4+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Route();
        $r->name = "Don’t Jis On My Sofa";
        $r->description = "As for Telefunken U47 to the BB, then continue up to a vague corner in the roof. Swing left to a good jug and finish up the slightly tricky slab above BB. Abseil off. N.B. The second pitch has seen re-equipping of some hangers and a double bolt belay. Take care with rope length when lowering";
        $r->length = 50;
        //$r->grade_id = ??; //6a+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Route();
        $r->name = "Ik Kan Mijn Ei Niet Kwijt";
        $r->description = "Recently regained it's hangers and double bolt belay. Totally hideous, the hardest off vertical moves in SE Wales. The slab to the right of Don’t Jis On My Sofa has a hard start. If successful, continue more easily, to a totally vile series of huge rock ups on smears, stepping left to reach the BB";
        $r->length = 18;
        //$r->grade_id = ??; //7a+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();



    }
}
