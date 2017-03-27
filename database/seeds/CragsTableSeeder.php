<?php

use Illuminate\Database\Seeder;
use App\Crag;

class CragsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crags')->delete();

        //first 20 alphabetically then some other popular crags

        //Crag Id = 1
        $c = new Crag();
        $c->lat = 51.5654710;
        $c->lng = -4.1012290;
        $c->name = "Anemone Wall";
        $c->description = "At dead low water there is a through-cave which provides a start for the routes as far as Anemone Wall. At all but spring tides or rough seas, it is possible to gain the routes a few metres up them, without any change. This is the slab 100m to the east of the headland. Access is down the easy slab to the east.";
        $c->tidalRange = 1;
        $c->orientation_id = 11;
        $c->approachTime = 20;
        $c->approachDetails = "This is the slab 100m to the east of the headland. Access is down the easy slab to the east.";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 12;
        $c->save();

        //Crag Id = 2
        $c = new Crag();
        $c->lat = 51.5619470;
        $c->lng = -4.0782820;
        $c->name = "Bacon Hole";
        $c->description = "Bacon Hole is an internationally important conservation site, both for its geology, its archaeology and for the fauna (protected bats) found in the area. Its a Site of Special Scientific Interest, and the features of the site (including roosting and hibernating bats) are protected by law. For this reason the owners, the National Trust and Government of Wales's conservation advisors, the Natural Resource for Wales do not allow climbing at this venue.";
        $c->tidalRange = null;
        $c->orientation_id = 3;
        $c->approachTime = 20;
        $c->approachDetails = "";
        $c->accessInformation = "Climbing is banned at this massive cave crag.";
        $c->rockType_id = 1;
        $c->seepage = true;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 12;
        $c->save();

        //Crag Id = 3
        $c = new Crag();
        $c->lat = 51.5861193;
        $c->lng = -4.0580303;
        $c->name = "Barland Quarry";
        $c->description = "Smooth low-angled slab. Allegedly the \"most technical slabs in South Wales\". Quarried limestone but mostly slate-like climbing on tiny edges. Some of the harder climbs have a preponderance of desperate smeary moves. Dries very quickly; one of the more accessible sport crags on Gower. Scope for one or two new routes.
This large slab has seen a recent re-equipment on some of the routes 'vandalised' by the Site Manager's JCB. The first pitch of Don't' Jis on my Sofa is now fully equipped.
Climbs to the left of Miss You are subject to frequent rockfall.
If you want to climb the harder routes then you may need to give some of the more delicate smears a light soft brushing (no wire brushing as this will only polish the rock).";
        $c->tidalRange = null;
        $c->orientation_id = 1;
        $c->approachTime = 15;
        $c->approachDetails = "This is the quarry on the right (north) hand side of the big bend coming out of Bishopston on the B4436, immediately past the turn off to Pwll Du.

Park in Kittle either at the Beaufort Arms or in the little lay-by opposite the small grocers. If you park at the Beaufort Arms remember to drop in for a pint afterwards. The food at the Beaufort is good too.";
        $c->accessInformation = "Private Property - Owner will ask you to leave if he sees you.

Park vehicles well away from the quarry. Cars parked near the quarry will alert the owner and he will come and ask you to leave.

If you see the owner, be polite and cooperative. You can always come back another day!";
        $c->rockType_id = 9;
        $c->seepage = true;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 14;
        $c->save();

        //Crag Id = 4
        $c = new Crag();
        $c->lat = 51.5658020;
        $c->lng = -4.3023240;
        $c->name = "Black Buttress Left";
        $c->description = "A cool crag";
        $c->tidalRange = null;
        $c->orientation_id = 4;
        $c->approachTime = 15;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 6;
        $c->save();

        //Crag Id = 5
        $c = new Crag();
        $c->lat = 51.5654740;
        $c->lng = -4.3026560;
        $c->name = "Black Buttress Right";
        $c->description = "A cool crag";
        $c->tidalRange = null;
        $c->orientation_id = 4;
        $c->approachTime = 15;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 6;
        $c->save();

        //Crag Id = 6
        $c = new Crag();
        $c->lat = 51.5692640;
        $c->lng = -4.2941050;
        $c->name = "Black Wall";
        $c->description = "A cool crag";
        $c->tidalRange = 1;
        $c->orientation_id = 1;
        $c->approachTime = 45;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = true;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 6;
        $c->save();

        //Crag Id = 7
        $c = new Crag();
        $c->lat = 51.5610530;
        $c->lng = -4.2823130;
        $c->name = "Block Buttress";
        $c->description = "A cool crag";
        $c->tidalRange = 2;
        $c->orientation_id = 3;
        $c->approachTime = 30;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 7;
        $c->save();

        //Crag Id = 8
        $c = new Crag();
        $c->lat = 51.5427040;
        $c->lng = -4.2362980;
        $c->name = "Boiler Slab";
        $c->description = "The best cliff in this section of the Gower Coast (Horses Cliff to Port Eynon). Named for the wrecked ship's boiler visible at low water. Groups use this - you may have to share. Single-pitch routes up to 24m.";
        $c->tidalRange = null;
        $c->orientation_id = 12;
        $c->approachTime = 35;
        $c->approachDetails = "Park considerately near the village green in Overton - behind the noticeboard is best - or turn around and find a layby, but please avoid blocking the postbox as there are some quite nice elderly people in the houses opposite who apparently send a lot of letters. Follow the road SW from the green as it becomes a track that bends to the left at a metal gate with a 'No Parking' sign, through a metal stile, then take the steep right-hand fork downhill, down wooden steps and through a wooden gate. Follow the path west, passing multiple promising-looking cliffs that turn out to be pap on closer inspection, until you spot the landmark of the pinnacle at the top-right of the crag";
        $c->accessInformation = null;
        $c->rockType_id = 2;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 8;
        $c->save();

        //Crag Id = 9
        $c = new Crag();
        $c->lat = 51.5620600;
        $c->lng = -4.0800950;
        $c->name = "Bosco's Den Area";
        $c->description = "A cool crag";
        $c->tidalRange = 2.5;
        $c->orientation_id = 3;
        $c->approachTime = 20;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = true;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 12;
        $c->save();

        //Crag Id = 10
        $c = new Crag();
        $c->lat = 51.5618230;
        $c->lng = -4.0827030;
        $c->name = "Bowen's Parlour";
        $c->description = "A cool crag";
        $c->tidalRange = null;
        $c->orientation_id = 3;
        $c->approachTime = 25;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 12;
        $c->save();

        //Crag Id = 11
        $c = new Crag();
        $c->lat = 51.5623040;
        $c->lng = -4.0792050;
        $c->name = "Bucketland";
        $c->description = "A cool crag";
        $c->tidalRange = 1;
        $c->orientation_id = 17;
        $c->approachTime = 35;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 12;
        $c->save();

        //Crag Id = 12
        $c = new Crag();
        $c->lat = 51.5690450;
        $c->lng = -4.2955400;
        $c->name = "Castaway Cove";
        $c->description = "A cool crag";
        $c->tidalRange = 2;
        $c->orientation_id = 1;
        $c->approachTime = 40;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 6;
        $c->save();

        //Crag Id = 13
        $c = new Crag();
        $c->lat = 51.5682950;
        $c->lng = -4.0372120;
        $c->name = "Caswell Bay - Far South Slab";
        $c->description = "A cool crag";
        $c->tidalRange = 2;
        $c->orientation_id = 3;
        $c->approachTime = 15;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 13;
        $c->save();

        //Crag Id = 14
        $c = new Crag();
        $c->lat = 51.5687150;
        $c->lng = -4.0366110;
        $c->name = "Caswell Bay - Great Slab";
        $c->description = "A cool crag";
        $c->tidalRange = 2;
        $c->orientation_id = 9;
        $c->approachTime = 10;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 13;
        $c->save();

        //Crag Id = 15
        $c = new Crag();
        $c->lat = 51.5684800;
        $c->lng = -4.0368930;
        $c->name = "Caswell Bay - Yellow Flecked Slab";
        $c->description = "A cool crag";
        $c->tidalRange = 2;
        $c->orientation_id = 3;
        $c->approachTime = 10;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 13;
        $c->save();

        //Crag Id = 16
        $c = new Crag();
        $c->lat = 51.5612890;
        $c->lng = -4.2816520;
        $c->name = "Catacomb Gully";
        $c->description = "A cool crag";
        $c->tidalRange = null;
        $c->orientation_id = 3;
        $c->approachTime = 40;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 7;
        $c->save();

        //Crag Id = 17
        $c = new Crag();
        $c->lat = 51.6466250;
        $c->lng = -4.0649930;
        $c->name = "Cefnstylle Quarry";
        $c->description = "A cool crag";
        $c->tidalRange = null;
        $c->orientation_id = 6;
        $c->approachTime = 5;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = true;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 14;
        $c->save();

        //Crag Id = 18
        $c = new Crag();
        $c->lat = 51.5720600;
        $c->lng = -3.9906000;
        $c->name = "Conservative Club Crag";
        $c->description = "This cliff was a sheet of limestone on the hill behind the Mumbles Conservative Club. Unfortunately it has been netted over and turned into a construction site. The following routes are recorded for historical purposes only.";
        $c->tidalRange = null;
        $c->orientation_id = 9;
        $c->approachTime = 5;
        $c->approachDetails = "From Swansea go into Mumbles, park opposite Conservative Club. Follow path beside it and scramble up the earthy bank to the crag. NB - in a residential area: don't give them reason to complain.";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = true;
        $c->midges = true;
        $c->sheltered = false;
        $c->area_id = 13;
        $c->save();

        //Crag Id = 19
        $c = new Crag();
        $c->lat = 51.5646300;
        $c->lng = -3.9983500;
        $c->name = "Crab Island";
        $c->description = " good little crag, easily accessible, sheltered and quick drying. Formerly described as \"Rams Tor Bays\" in the 1992 Gower and South East Wales Guidebook.

The crag is formed by an undercut west facing Main Wall and a taller south facing Back Wall set at right angles.

The Main Wall is a highly featured undercut slab that offers excellent possibilities for natural protection, a few thin slings will be useful for the multitude of spike runners available. There are also three good pegs at the top of the wall to aid belays. The Main Wall catches the sun from midday.

The Back Wall is similar but a little taller and steeper. Two metal stakes allow for easy belays.";
        $c->tidalRange = 3;
        $c->orientation_id = 3;
        $c->approachTime = 15;
        $c->approachDetails = "A quicker approach for locals is from the cliff top path from Rotherslade.

Visitors should follow the B4433 (Mumbles Road) through Mumbles to park at the very end of the road past Limeslade Bay. This is just west of the Mumbles headland (GR SS 627 872), it has a small ice cream parlour/cafe above it. Walk west along the asphalt coastal path for about 500m until it starts to climb up some concrete steps, above Rams Tor. Follow the path a further 400 m until a staggered gap in the fence is reached, a steep muddy path zig zags its way to the top of the crag.";
        $c->accessInformation = null;
        $c->rockType_id = 2;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 13;
        $c->save();

        //Crag Id = 20
        $c = new Crag();
        $c->lat = 51.53930;
        $c->lng = -4.21423;
        $c->name = "Culver Hole";
        $c->description = "Culver Hole contains a dovecote (culver is an old word for dove). This is worth exploring which is more than can be said for the routes, which are pokey to say the least. A hanging rope is required for escape at the top.";
        $c->tidalRange = 3;
        $c->orientation_id = 3;
        $c->approachTime = 15;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = true;
        $c->area_id = 8;
        $c->save();

        //end of first 20m alphabetic
        //below are popular crags
        //or ones that I like
        //anything goes really.
        //Crag Id = 21
        $c = new Crag();
        $c->lat = 51.569941;
        $c->lng = -4.11139;
        $c->name = "Three Cliffs";
        $c->description = "Protruding into the centre of a deep sandy bay to the South East of Penmaen, Three Cliffs provides Gower with its most picturesque venue. Add to this its number of quality easy to mid-grade routes and its lack of seriousness and it is easy to see why the crag is extremely popular. Pobbles Bay West lying only 100m to the east provides a useful overspill, or somewhere to retreat to when the tides threaten. Pobbles Bay East is considerably more tidal but offers some easier routes, which are far better than the over-popular venue of King Wall and on better rock. Scoop Corner is a recent rediscovery, perhaps worth a quick solo if in the area.";
        $c->tidalRange = 3;
        $c->orientation_id = 3;
        $c->approachTime = 30;
        $c->approachDetails = "1. Penmaen Access

On the A4118 before Penmaen, when approaching from Swansea turn right (north) at a telephone kiosk and bench (GR 532 887), into a National Trust car park. Cross back over the road to an obvious track (at North Hill Farm) and follow signposts for the beach. Cross the river via obvious stepping stones. The rear of the Three Cliffs is visible ahead. At low to mid tides, Pobbles Bay can be reached by walking eastwards round the front of the arch.

2. Southgate Access

Take the offshoot of the B4436 leading into Southgate, then a right-hand lane (Bendrick Drive) just after the Golf Club (it will be necessary to park a little further on and walk back). Follow a path through fields and round a wood to gain a path leading down through dunes to Pobblesafter about 15 minutes. It is also possible to follow the cliff top road and path as described in the Shire Combe area approach.";
        $c->accessInformation = null;
        $c->rockType_id = 2;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = true;
        $c->area_id = 11;
        $c->save();

        //Crag Id = 22
        $c = new Crag();
        $c->lat = 51.568593;
        $c->lng = -4.122941;
        $c->name = "Great Tor Proper";
        $c->description = "Mostly short (up to 18m) routes, but some longer routes (with one 73m multi-pitch VD) on the Great Tor, which lies inland. Many of the routes are easy, sub-E1, rising from the beach.";
        $c->tidalRange = null;
        $c->orientation_id = 9;
        $c->approachTime = 30;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 2;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 10;
        $c->save();

        //Crag Id = 23
        $c = new Crag();
        $c->lat = 51.549429;
        $c->lng = -4.253615;
        $c->name = "Juniper Wall";
        $c->description = "A truly tranquil and peaceful spot that harbours one of Gower's most impressive crags. It is naturally very sheltered from the wind, and the grassy area at the base makes a fine picnic/sunbathing spot to watch the seals. The only downside is that, if looking upwards, the triangular shape of the crag is not solely due to perspective, so many of the routes feel a little cramped at the top.";
        $c->tidalRange = null;
        $c->orientation_id = 3;
        $c->approachTime = 30;
        $c->approachDetails = "From Pilton Green (B4247): park on open land on the N side of the road opposite a white house. Signpost L of the house says Paviland Cave: follow path S through fields over several stiles to the last one at the head of a valley. Over this stile turn left up path, continue 100m until next (wider/shallower) valley is reached. Down here and continue skirting the right the E side until you turn a corner right at the bottom and Juniper Wall comes into view, on your R, facing out to sea.";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 8;
        $c->save();

        //Crag Id = 24
        $c = new Crag();
        $c->lat = 51.564963;
        $c->lng = -4.092269;
        $c->name = "Foxhole Cave";
        $c->description = "Foxhole Cove is the small bay between Watch House East and Heatherslade Bay itself. Foxhole itself is a superbly steep crag, basically the roof of a large cave, tucked back well back and above the sea at the back of the cove. It contains some of the best sport routes on Gower. The crag does seep after prolonged rain, but otherwise it performs good umbrella service. It is always possible to climb in or out of the sun by selecting the correct wall. There are a number of smaller areas and the easy routes on Wrinkle Slab and Grey Slab, well worth seeking out.";
        $c->tidalRange = null;
        $c->orientation_id = 3;
        $c->approachTime = 30;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = true;
        $c->midges = false;
        $c->sheltered = true;
        $c->area_id = 12;
        $c->save();

        //Crag Id = 25
        $c = new Crag();
        $c->lat = 51.566724;
        $c->lng = -4.3003771;
        $c->name = "Trial Wall";
        $c->description = "Home to the splendid Adultress (E2 5c). Also has some finger-busting crimpfests for sporty types. The longest route is 27m (Adultress) but most are more like 15m.";
        $c->tidalRange = null;
        $c->orientation_id = 4;
        $c->approachTime = 15;
        $c->approachDetails = "Park at Rhossili village and walk along the narrow road past the NT shop towards Worm's Head. Just before the track makes a sharp left turn, scramble down towards the sea towards Trial Wall.";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 6;
        $c->save();

        //Crag Id = 26
        $c = new Crag();
        $c->lat = 53.089797;
        $c->lng = -4.049363;
        $c->name = "Cromlech Boulders";
        $c->description = "Hidden Wall Area";
        $c->tidalRange = null;
        $c->orientation_id = 1;
        $c->approachTime = 15;
        $c->approachDetails = "";
        $c->accessInformation = null;
        $c->rockType_id = 1;
        $c->seepage = false;
        $c->midges = true;
        $c->sheltered = false;
        $c->area_id = 17;
        $c->save();

        //Crag Id = 26
        $c = new Crag();
        $c->lat = 51.565784;
        $c->lng = -4.096438;
        $c->name = "Watch House Slab";
        $c->description = "A very smart little crag that is non-tidal and has some excellent routes up to 15m long.

The rock is limestone, smooth and slabby at the base and bulging and rough above half height. There are some interesting features such as sandstone, breccia and calcite veins to give the routes some individual character.

The crag faces south west and so gets the sun by mid morning. However, as the crag lies within a deep gully it does not get the benefit of evening sunshine.";
        $c->tidalRange = null;
        $c->orientation_id = 1;
        $c->approachTime = 15;
        $c->approachDetails = "Walk west from the National Trust car park in Southgate. Pass the first headland (above Foxhole Cove) and out onto the second headland.

It is hidden beneath the headland opposite the last house (usually flying a flag) and a steep path directly above the cliff.

But a better approach takes a diagonal track running westwards from the first headland down to a large non-tidal platform. Facing the sea, turn right and walk round into the gully; ten minutes from bus-stop to first bolt.";
        $c->accessInformation = null;
        $c->rockType_id = 2;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = true;
        $c->area_id = 12;
        $c->save();


    }
}
