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
        $c->orientation = "ssw";
        $c->approachTime = 20;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->tidalRange = 2;
        $c->orientation = "s";
        $c->approachTime = 20;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "n";
        $c->approachTime = 5;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "w";
        $c->approachTime = 15;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "w";
        $c->approachTime = 15;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "n";
        $c->approachTime = 45;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "s";
        $c->approachTime = 30;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->description = "A cool crag";
        $c->tidalRange = null;
        $c->orientation = "sw";
        $c->approachTime = 40;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "e";
        $c->approachTime = 20;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "s";
        $c->approachTime = 25;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "aaa";
        $c->approachTime = 35;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "n";
        $c->approachTime = 40;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "s";
        $c->approachTime = 15;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "se";
        $c->approachTime = 10;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "s";
        $c->approachTime = 10;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "s";
        $c->approachTime = 40;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "ne";
        $c->approachTime = 5;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->description = "A cool crag";
        $c->tidalRange = null;
        $c->orientation = "se";
        $c->approachTime = 5;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->description = "A cool crag";
        $c->tidalRange = 3;
        $c->orientation = "s";
        $c->approachTime = 15;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->description = "A cool crag";
        $c->tidalRange = 3;
        $c->orientation = "s";
        $c->approachTime = 15;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->description = "A cool crag";
        $c->tidalRange = 3;
        $c->orientation = "s";
        $c->approachTime = 30;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->description = "A cool crag";
        $c->tidalRange = null;
        $c->orientation = "se";
        $c->approachTime = 30;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->description = "A cool crag";
        $c->tidalRange = null;
        $c->orientation = "s";
        $c->approachTime = 30;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->description = "A cool crag";
        $c->tidalRange = null;
        $c->orientation = "s";
        $c->approachTime = 30;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->description = "A cool crag";
        $c->tidalRange = null;
        $c->orientation = "w";
        $c->approachTime = 10;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
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
        $c->orientation = "n";
        $c->approachTime = 15;
        $c->approachDetails = "";
        $c->accessInformation = "";
        $c->rockType = "";
        $c->seepage = false;
        $c->midges = true;
        $c->sheltered = false;
        $c->area_id = 17;
        $c->save();


    }
}
