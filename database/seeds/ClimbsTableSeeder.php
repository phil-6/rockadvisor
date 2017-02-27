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
		
		
		
		//Juniper wall
		$r = new Climb();
        $r->name = "The Jackal Finish";
        $r->description = "Climb any route to reach the Junction stance. Move up and left into an impending triangular corner (ancient bolts). Climb the corner to a huge PR and swing left onto a rib. Continue left for 3m, then pull up and right into a groove. Either traverse left up this groove to finish, or pull directly up to a ledge and finish up steep rock.";
        $r->length = 50;
        $r->grade_id = 202; //e2, 5c
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "Overkill";
        $r->description = "Good, slightly bold climbing on the P1, is a little spoiled by the P2, which is nothing more than a few metres of independent climbing used to reach the top of Assassin.
		1. 24m Start at the left side of the crag, below a crack in the slab 5m left of the prominent niche of Killer's Route. Climb the crack, then curve rightwards on discontinuous cracks below the overlap to gain the Junction Stance, 4m below the main overhangs, PB.
		2. 24m Traverse right, bearing upwards, keeping about 2m below under the overlaps, to reach a more open area of rock. Finish diagonally right up these cracks (Assassin).";
        $r->length = 48;
        $r->grade_id = 167; //hvs 4c,4c
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "Killer's Route";
        $r->description = "Start below and left of the slightly rightward-slanting shallow central groove by a wide slanting crack and slab.
		Pitch 1
20m Climb up left to a large triangular niche. Surmount the overhang above and continue up a crack to The Junction Stance, PB.
Pitch 2
22m Traverse rightwards for 3m and pull into a small overhung ledge in the corner. Pull over to another overhung ledge, quit it on its right and continue up steep but easy ground.";
        $r->length = 42;
        $r->grade_id = 201; //e2,4c,5b
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "Haaievinnesoep";
        $r->description = "Pitch 1
20m As for Killer's Route to the Junction Stance.
Pitch 2
15m Clip the PR high up above the belay from the corner (The Jackal Finish) and step back down. Climb the headwall directly above the belay (crux) to gain an obvious scoop, 2PRs. Follow easy ground to finish up the corner above the Zygon nest.";
        $r->length = 35;
        $r->grade_id = 235; //e4,4b,6a
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "Barracuda";
        $r->description = "A daring route following the obvious crozzly line left of Assassin.
Pitch 1
18m Climb directly up to a v formed by Assassin crossing Hair Raiser low down. The initial hard moves up to the start of the crozzly flakes are well protected by a good wire, but there then follows a 12m run out on tricky 5c moves to a jam crack. Place gear, breathe a sight of relief and amble easily up to an obvious leftward traverse leading to The Junction Stance.
Pitch 2
20m Gain P2 of Killer's Route, by pulling up right round the arete above the stance.";
        $r->length = 38;
        $r->grade_id = 251; // e5,6a,5c
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "Assassin";
        $r->description = "Superb climbing up the rightward-slanting groove in the centre of the cliff. The best route on Gower at this grade. Climb the crack and slab that lead to a groove and a shallow niche at 21m. Continue using the twin cracks above, move right around the bulge and then left to a broken groove. Follow this with difficulty to a ledge, then move left to finish up a scoop.";
        $r->length = 45;
        $r->grade_id = 168; //hvs,5a
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "Perch";
        $r->description = "Compared to Barracuda this is a sea cucumber. Climb to the overlap as for Hitman then continue up a pair of thin cracks to the break of Dry Riser. The wall above is climbed to the top finishing about 3m right of Assassin.";
        $r->length = 35;
        $r->grade_id = 185; //e1 5b
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "Trevor, The Pint And The Pram";
        $r->description = "Start below the obvious jammed block at 7m, to the right of the Assassin groove. Step onto the block from the left and continue up a vague rightward-sloping crack. From the upper diagonal crack (Dry Riser) move diagonally right across a steep wall, to gain a broken crack and follow this slightly left to the top. This route was referred to as Hitman in previous guides.";
        $r->length = 33;
        $r->grade_id = 167; //hvs, 4c
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "Rattle And Hum";
        $r->description = "Start 2m right of Trevor, The Pint And The Pram and climb a rightwards slanting crack to the upper traverse line (Dry Riser) and a niche. Finish up the right-hand of the two shallow cracked grooves.";
        $r->length = 35;
        $r->grade_id = 151; //vs, 4c
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "Task Force";
        $r->description = "Start at a small recess below a vague right-slanting groove 5m right of Hitman. Follow the groove rightwards to gain the upper traverse line (Dry Riser), then finish up the tricky groove above.";
        $r->length = 36;
        $r->grade_id = 151; //vs, 4c
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "Ninja";
        $r->description = "Right of Task Force, just left of the start of the start of the diagonal crack of Hair Raiser, climb directly to a hanging block at 3m, then follow a zig zag crack to a shallow niche on the upper diagonal line (Dry Riser). Continue up left through a black bulge, to another shallow niche. Bear right to finish. Lacks definition and is slightly loose.";
        $r->length = 30;
        $r->grade_id = 150; //vs, 4b
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "Hair Raiser";
        $r->description = "This follows the lower of two leftward-slanting cracklines across the face. Start at the right end of the crack.
Pitch 1
24m Follow the crack to the apex of the easy angled slab below Assassin. Continue along the steepening crack and strenuously across a bulging wall to a niche (Killers Route). Continue for 4m to belays in a small recess.
Pitch 2
20m Move left to an overlap and follow it down for 4m. Pull up left at a slight break, to another overlap. Traverse left beneath this to finish at the gully.";
        $r->length = 44;
        $r->grade_id = 167; //hvs, 5a,4c
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "On The Horizon";
        $r->description = "Start at the bottom right-hand end of the lower diagonal crack (Hair Raiser), 5m left of the prominent black scoop (Socialist Worker). Follow parallel cracks rightward until they peter out, move right and up to a recess, taking care with the rock. Finish directly.";
        $r->length = 24;
        $r->grade_id = 150; //vs 4b
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "On The Horizon Direct";
        $r->description = "Climb the crack between On The Horizon and Socialist Worker, to join the former at 10m.";
        $r->length = 24;
        $r->grade_id = 151; //vs, 4c
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "Socialist Worker";
        $r->description = "It keeps going left. Start at a shallow triangular black-stained scoop about halfway between the starts of the two diagonal traverse lines. Climb to the upper traverse line (Dry Riser), step left and climb the tricky groove as for Task Force. It is possible to climb 1m right at about the same grade.";
        $r->length = 27;
        $r->grade_id = 151; //vs,4c
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		$r = new Climb();
        $r->name = "Dry Riser";
        $r->description = "A girdle taking the higher of the two diagonal cracks. Start at the right side of the cliff where the crack meets the ground.
Pitch 1
36m Climb the crack to below the main overhangs. Traverse 6m left to The Junction Stance.
Pitch 2
31m Traverse left for 7m and break through the overlap, just left of a tiny corner. Continue up and left to easy ground.";
        $r->length = 67;
        $r->grade_id = 167; //hvs,4c,4c
        //$r->topo_id = ??; 
        $r->crag_id = 23;
        $r->save();
		
		
		
		//Boiler Slab
		
		$r = new Climb();
        $r->name = "Scent Of Mutton";
        $r->description = "Find the most interesting line up the rock to the left of Classic. Better than it looks, but take care with some of the blocks in the central section.";
        $r->length = 19;
        $r->grade_id = 101; //s,4a
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Classic";
        $r->description = "Climb the obvious corner on the left side of the main slabby face, keeping to its right-hand slab.";
        $r->length = 19;
        $r->grade_id = 49; //hd
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Column";
        $r->description = "Start 1m right of Classic. Climb directly up the right side of a shallow pillar just left of a groove, to a shallow depression with a patch of ivy. Climb over this and follow ledges to the top.";
        $r->length = 19;
        $r->grade_id = 101; //s,4a
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Dulfer";
        $r->description = "Continually interesting climbing. Follow the obvious corner right of Column until it peters out. Step right and continue to the bulges above, step left and climb the break in the bulges, then climb directly to the top.";
        $r->length = 19;
        $r->grade_id = 101; //s,4a
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Swirtler";
        $r->description = "Climb the right edge of the smooth slab 1m right of Dulfer to the bulges above. Go through these in a direct line between Dulfer and Direct. Feels a little contrived, but still pleasant enough.";
        $r->length = 21;
        $r->grade_id = 169; //hvs,5b
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Direct";
        $r->description = "Start 4m right of Swirtler at a rib in a black-streaked slab. Climb the rib, then move left to surmount the arch at a good layoff flake. Follow the slab above to a small roof and pass it on the left. Finish direct through the bulges.";
        $r->length = 21;
        $r->grade_id = 151; //vs,4c
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Termination";
        $r->description = "Start 3m right of Direct below a patch of ivy on the overhang above. Climb to it, over it and up the thin crack until it peters out. Traverse leftwards and exit over the bulging blocks left of the main overhang. Previously known as Hotplate.";
        $r->length = 21;
        $r->grade_id = 167; //hvs,4a
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Nuclear Arms";
        $r->description = "A one move wonder. As for Termination to the traverse, but continue direct to the roof. Cross the roof directly near the poor PR (good back up wires under the roof).";
        $r->length = 21;
        $r->grade_id = 202; //e2,5c
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Middle Age Dread";
        $r->description = "Start 4m right of Termination at a slight right-facing groove. Climb the groove boldly over the overlap and continue directly up the slabs to the main overhang at its widest point. Clip the PR on Nuclear Arms, then climb the roof to the right by a thin undercut in the roof and a slight flake above.";
        $r->length = 21;
        $r->grade_id = 219; //e3,6a
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Nemo";
        $r->description = "At the right-hand side of the main slab is an undercut recess. Climb out of the left-hand side of this via a groove containing a crack. Move right, then continue direct to a groove through the block overhangs above. Follow this groove taking the jutting overhang at the top directly.";
        $r->length = 18;
        $r->grade_id = 154; //vs, 4c
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Tokyo";
        $r->description = "An enjoyable route with a technical move, or a long reach. Start just right of Nemo, below the widest part of the overlap and reach over from a good undercut to a good, if distant flake. Saunter up the slab with good gear, to take a finishing groove through the bulges.";
        $r->length = 21;
        $r->grade_id = 186; //e1,5c
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Tokyo II";
        $r->description = "Start at a vague crack in a slab 2m right of Tokyo. Gain an undercut in the overlap above. Pull over onto the slab, continuing directly to finish through the upper overlap using a rugby ball feature.";
        $r->length = 21;
        $r->grade_id = 169; //hvs,5b
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Ayesha";
        $r->description = "Start at the foot of a slab below the right end of the overlap, just under a series of thin undercut flakes. Follow these to finish up the left side of the left arete of the Pinnacle Crack groove.";
        $r->length = 21;
        $r->grade_id = 151; //vs,4c
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Pinnacle Crack";
        $r->description = "This takes the obvious broken groove at the right of the main face.";
        $r->length = 24;
        $r->grade_id = 65; //vd
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Girdle";
        $r->description = "Start up Classic and follow the obvious horizontal crack at half-height. Finish up Pinnacle Crack or Ayesha.";
        $r->length = 27;
        $r->grade_id = 151; //vs,4c
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
		
		$r = new Climb();
        $r->name = "Overhang Traverse";
        $r->description = "Climb Dulfer to the obvious horizontal crack, then go up to the next crack. Move rightwards to below a small roof then go up to the main roof. Follow the horizontal crack rightwards and exit up a deep cut to the right.";
        $r->length = 36;
        $r->grade_id = 151; //vs 4c
        //$r->topo_id = ??; 
        $r->crag_id = 8;
        $r->save();
    }
}
