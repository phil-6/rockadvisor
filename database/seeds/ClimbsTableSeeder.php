<?php

use Illuminate\Database\Seeder;
use App\Climb;

class ClimbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('climbs')->delete();

        $r = new Climb();
        $r->name = "Great Chimney";
        $r->description = "Start at the left end of the ledge at the foot of the slab. Gain the chimney from the rib bounding the slab on the left and climb it, taking care with blocks at the top";
        $r->length = 23;
        $r->grade_id = 150; //vs, 4b
        //$r->topo_id = ??;
        $r->crag_id = 1;
        $r->save();

        $r = new Climb();
        $r->name = "Honesty";
        $r->description = "Start as for Great Chimney then step onto the slab at a good hold. Climb the slab just to the right of the right edge of the chimney, with some unnerving moves.";
        $r->length = 18;
        $r->grade_id = 167; //hvs, 4c
        //$r->topo_id = ??; 
        $r->crag_id = 1;
        $r->save();

        $r = new Climb();
        $r->name = "PickPocket";
        $r->description = "An artificial climb directly up the slab between Great Chimney and Anemone Wall. Using the crack is forbidden.";
        $r->length = 21;
        $r->grade_id = 169; //hvs, 5b
        //$r->topo_id = ??; 
		 $r->crag_id = 1;
        $r->save();

        $r = new Climb();
        $r->name = "Anemone Wall";
        $r->description = "Start where the crevasse closes and traverse left to the obvious diagonal crack. When it peters out at a pocket, climb direct.";
        $r->length = 21;
        $r->grade_id = 151; //vs, 4c
        //$r->topo_id = ??; 
		 $r->crag_id = 1;
        $r->save();

        $r = new Climb();
        $r->name = "Alternate";
        $r->description = "Follow discontinuous cracks and water-worn grooves right of Anemone Wall directly to the top.";
        $r->length = 18;
        $r->grade_id = 113; //s
        //$r->topo_id = ??; 
		 $r->crag_id = 1;
        $r->save();

        $r = new Climb();
        $r->name = "Respite";
        $r->description = "Start 1m right of Alternate and climb the slab direct.";
        $r->length = 18;
        $r->grade_id = 65; //vd
        //$r->topo_id = ??; 
		 $r->crag_id = 1;
        $r->save();

        $r = new Climb();
        $r->name = "Wide Crack";
        $r->description = "The wide crack to the right of Respite.";
        $r->length = 13;
        $r->grade_id = 33; //d
        //$r->topo_id = ??; 
		$r->crag_id = 1;
        $r->save();

        $r = new Climb();
        $r->name = "Girdle Traverse";
        $r->description = "Traverse the slab from left to right along the obvious thin break.";
        $r->length = 22;
        $r->grade_id = 119; //hs, 4c
        //$r->topo_id = ??;
        $r->crag_id = 1;
        $r->save();

        $r = new Climb();
        $r->name = "Jap's Eye";
        $r->description = "The first short climb up the slab has a tricky finish.";
        $r->length = 12;
        $r->grade_id = 413; //6a
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Climb();
        $r->name = "Cheesy Flaps";
        $r->description = "The line to the right of Jap’s Eye. Easy climbing to a slightly harder finish.";
        $r->length = 13;
        $r->grade_id = 405; //5
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Climb();
        $r->name = "Double Dutch";
        $r->description = "The slab to the right of Cheesy Flaps has a very hard start and a hard finish. The holes are off climb!";
        $r->length = 15;
        $r->grade_id = 418; //6c+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Climb();
        $r->name = "Mister Polite Goad";
        $r->description = "A hard move up to the first hole with easier climbing at the finish.";
        $r->length = 15;
        $r->grade_id = 418; //6c+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Climb();
        $r->name = "Miss You";
        $r->description = "The start of the quality climbing on the slab. A tricky move at the start, an easier middle section with some interesting moves at the last two staples.";
        $r->length = 17;
        $r->grade_id = 416; //6b+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Climb();
        $r->name = "Rotbeest";
        $r->description = "The first climb on the continuous area of slab has a hideous move at two-thirds height which may prove even more stressful as the climb has \"lost\" its bolt hangers.";
        $r->length = 17;
        $r->grade_id = 422; //7b+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Climb();
        $r->name = "Wandelanden Tak";
        $r->description = "The next line on the slab, starting above a pile of stones and a big stick. A technical start leads to a tricky section to gain the fifth BR, then step right from the good edge to join Geef Onze Fietsen Terug. Lower off the twin BB.";
        $r->length = 17;
        $r->grade_id = 420; //7a+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Climb();
        $r->name = "Geef Onze Fietsen Terug! ";
        $r->description = "The first long long climb that swaggers up the biggest section of unbroken slabs. Take a lot of quickdraws. Startwhere a pile of bicycles used to be (!) at the base of the crag (about 4m right of Wandelanden Tak) and make this and continue up to the BB by the long hole at 50m. Abseil off. N.B. The second pitch has seen some re-equipping of the crumbled bolt hangers and final belay.Watch rope length when lowering off!!";
        $r->length = 50;
        $r->grade_id = 418; //6c+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Climb();
        $r->name = "Stoeipoesje";
        $r->description = "Marginally more run out than the other climbs - the slab right of Geef Onze Fietsen Terug to a BB at18m.";
        $r->length = 18;
        $r->grade_id = 418; //6c+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Climb();
        $r->name = "Wij Zitten Nog In Een Sneeuwstorm";
        $r->description = "The slab to the right of Stoeipoesje and left of the groove, to a scoop at 18m. Step right to the belay of the next climb. Sustained at this grade with some quality moves!";
        $r->length = 18;
        $r->grade_id = 416; //6b+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Climb();
        $r->name = "Stinking Of Fish";
        $r->description = "The crack in the slab right of Wij Zitten Nog In Een Sneeuwstorm to join and finish up Telefunken U47. 8 is no longer needed to protect the entry to the groove,fully bolted but no one will \"tell\" if you take some wires for practice.";
        $r->length = 18;
        $r->grade_id = 414; //6a+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Climb();
        $r->name = "Telefunken U47";
        $r->description = "The obvious groove to a BB at 18m.";
        $r->length = 18;
        $r->grade_id = 398; //4+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Climb();
        $r->name = "Don’t Jis On My Sofa";
        $r->description = "As for Telefunken U47 to the BB, then continue up to a vague corner in the roof. Swing left to a good jug and finish up the slightly tricky slab above BB. Abseil off. N.B. The second pitch has seen re-equipping of some hangers and a double bolt belay. Take care with rope length when lowering";
        $r->length = 50;
        $r->grade_id = 416; //6a+
        //$r->topo_id = ??; 
		 $r->crag_id = 3;
        $r->save();

        $r = new Climb();
        $r->name = "Ik Kan Mijn Ei Niet Kwijt";
        $r->description = "Recently regained it's hangers and double bolt belay. Totally hideous, the hardest off vertical moves in SE Wales. The slab to the right of Don’t Jis On My Sofa has a hard start. If successful, continue more easily, to a totally vile series of huge rock ups on smears, stepping left to reach the BB";
        $r->length = 18;
        $r->grade_id = 420; //7a+
        //$r->topo_id = ??; 
        $r->crag_id = 3;
        $r->save();

		
		
		
		
		//Trial Wall Crags
		$r = new Climb();
        $r->name = "The Adulteress";
        $r->description = "Climb the crack just right of the left arete of the main face, through an overhang, then traverse right along an obvious break and climb the wide crack to the top.";
        $r->length = 24;
        $r->grade_id = 202; //e2, 5c
        //$r->topo_id = ??; 
        $r->crag_id = 25;
        $r->save();
		
		$r = new Climb();
        $r->name = "Blackman's Pinch";
        $r->description = "A popular test piece, start just right of the arete. Climb a rightward-slanting crack to the overlap. Surmount this, BR, and gain the break above (crux). Using the 'new' obvious jug out left is not only off route but will stop you in your tracks. Finish as for The Adulteress.";
        $r->length = 24;
        $r->grade_id = 235; //e4, 6a
        //$r->topo_id = ??; 
        $r->crag_id = 25;
        $r->save();
		
		$r = new Climb();
        $r->name = "Skull Attack";
        $r->description = "A stunningly technical wall climb, currently fully bolted. Start right of Blackman's Pinch and left of the Crime and Punishment groove below an overlap. Climb to and surmount the overlap to a ledge. Move left to a thin crack. Moving slightly right at a good thin break, make a baffling sequence on non-existent flakes to gain a prominent groove. Mantle awkwardly into this, topping out to bolt belay.";
        $r->length = 24;
        $r->grade_id = 486; //e6 6b, f7b+, gone with the sport grade rather than trad
        //$r->topo_id = ??; 
        $r->crag_id = 25;
        $r->save();
		
		$r = new Climb();
        $r->name = "Retrobution";
        $r->description = "Plough on up the Crime and Punishment groove until holds run out, continue into Skull Attack to finish.";
        $r->length = 24;
        $r->grade_id = 485; //f7b
        //$r->topo_id = ??; 
        $r->crag_id = 25;
        $r->save();
		
		$r = new Climb();
        $r->name = "Crime and Punishment";
        $r->description = "Fine sustained climbing. Start below a scoop and 3 BRs in the middle of the wall. Gain the scoop, then follow the shallow groove to its top. Traverse right along the obvious break to thin cracks, PR, and climb these (hard) to good jambs beneath the overhang, old PR. The crack then becomes less helpul when pushing for the top.";
        $r->length = 23;
        $r->grade_id = 252; //e5, 6b
        //$r->topo_id = ??; 
        $r->crag_id = 25;
        $r->save();
		
		$r = new Climb();
        $r->name = "Black Wall";
        $r->description = "The original and direct finish now regeared. A vicious, fingery problem, especially when the direct finish is taken. Start 3m right of Crime and Punishment at a line of 'twizzles'. Make a series of difficult moves to below the bulge. Desperate moves past the remains of an edge lead over the overlap to the top. The route had lost a hold at the top but it has been successfully redpointed in ";
        $r->length = 21;
        $r->grade_id = 490; //f8a+
        //$r->topo_id = ??; 
        $r->crag_id = 25;
        $r->save();
		
		$r = new Climb();
        $r->name = "Inch Pinch";
        $r->description = "A pitch, up a short crack on the right side of the crag. Boulder up directly to a BR. Gain a crack with difficulty and climb it. Continue more easily to the top.";
        $r->length = 15;
        $r->grade_id = 483; //f7a
        //$r->topo_id = ??; 
        $r->crag_id = 25;
        $r->save();
		
		$r = new Climb();
        $r->name = "The Hant";
        $r->description = "Follow Inch Pinch to a good lay-away hold, then move right and over the overlap with difficulty. Follow a shallow groove and crack to the top.";
        $r->length = 15;
        $r->grade_id = 483; //f7a
        //$r->topo_id = ??; 
        $r->crag_id = 25;
        $r->save();
		
		$r = new Climb();
        $r->name = "Tribulations";
        $r->description = "The right arete of the buttress, moving left at the top.";
        $r->length = 12;
        $r->grade_id = 483; //f7a
        //$r->topo_id = ??; 
        $r->crag_id = 25;
        $r->save();
		
		$r = new Climb();
        $r->name = "Shakeout";
        $r->description = "A girdle of Trial Wall from right to left. Start at the right edge of the wall, at the obvious breakline below the bulges. Follow the break past 2BRs to join Crime and Punishment. Move up for 2m and continue leftwards, BR, to finish up The Adulteress. A hanging stance can be taken on on Crime And Punishment.";
        $r->length = 27;
        $r->grade_id = 219; //e3, 6a
        //$r->topo_id = ??; 
        $r->crag_id = 25;
        $r->save();
    }
}
