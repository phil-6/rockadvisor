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
        $c->lng =  -4.1012290;
        $c->name = "Anemone Wall";
        $c->description = "A cool crag";
        $c->tidal_range = 1;
        $c->orientation = "ssw";
        $c->approach_time = 20;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 12;
        $c->save();

        //Crag Id = 2
        $c = new Crag();
        $c->lat = 51.5619470;
        $c->lng =  -4.0782820;
        $c->name = "Bacon Hole";
        $c->description = "A cool crag";
        $c->tidal_range = 2;
        $c->orientation = "s";
        $c->approach_time = 20;
        $c->seepage = true;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 12;
        $c->save();

        //Crag Id = 3
        $c = new Crag();
        $c->lat = 51.5861193;
        $c->lng =  -4.0580303;
        $c->name = "Barland Quarry";
        $c->description = "A cool crag";
        $c->tidal_range = null;
        $c->orientation = "n";
        $c->approach_time = 5;
        $c->seepage = true;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 14;
        $c->save();

        //Crag Id = 4
        $c = new Crag();
        $c->lat = 51.5658020;
        $c->lng =  -4.3023240;
        $c->name = "Black Buttress Left" ;
        $c->description = "A cool crag";
        $c->tidal_range = null;
        $c->orientation = "w";
        $c->approach_time = 15;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 6;
        $c->save();

        //Crag Id = 5
        $c = new Crag();
        $c->lat = 51.5654740;
        $c->lng =  -4.3026560;
        $c->name = "Black Buttress Right";
        $c->description = "A cool crag";
        $c->tidal_range = null;
        $c->orientation = "w";
        $c->approach_time = 15;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 6;
        $c->save();

        //Crag Id = 6
        $c = new Crag();
        $c->lat = 51.5692640;
        $c->lng =  -4.2941050;
        $c->name = "Black Wall" ;
        $c->description = "A cool crag";
        $c->tidal_range = 1;
        $c->orientation = "n";
        $c->approach_time = 45;
        $c->seepage = true;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 6;
        $c->save();

        //Crag Id = 7
        $c = new Crag();
        $c->lat = 51.5610530;
        $c->lng =  -4.2823130;
        $c->name = "Block Buttress";
        $c->description = "A cool crag";
        $c->tidal_range = 2;
        $c->orientation = "s";
        $c->approach_time = 30;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 7;
        $c->save();

        //Crag Id = 8
        $c = new Crag();
        $c->lat = 51.5427040;
        $c->lng =  -4.2362980;
        $c->name = "Boiler Slab";
        $c->description = "A cool crag";
        $c->tidal_range = null;
        $c->orientation = "sw";
        $c->approach_time = 40;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 8;
        $c->save();

        //Crag Id = 9
        $c = new Crag();
        $c->lat = 51.5620600;
        $c->lng =  -4.0800950;
        $c->name = "Bosco's Den Area";
        $c->description = "A cool crag";
        $c->tidal_range = 2.5;
        $c->orientation = "e";
        $c->approach_time = 20;
        $c->seepage = true;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 12;
        $c->save();

        //Crag Id = 10
        $c = new Crag();
        $c->lat = 51.5618230;
        $c->lng =  -4.0827030;
        $c->name = "Bowen's Parlour";
        $c->description = "A cool crag";
        $c->tidal_range = null;
        $c->orientation = "s";
        $c->approach_time = 25;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 12;
        $c->save();

        //Crag Id = 11
        $c = new Crag();
        $c->lat = 51.5623040;
        $c->lng =  -4.0792050;
        $c->name = "Bucketland";
        $c->description = "A cool crag";
        $c->tidal_range = 1;
        $c->orientation = "aaa";
        $c->approach_time = 35;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 12;
        $c->save();

        //Crag Id = 12
        $c = new Crag();
        $c->lat = 51.5690450;
        $c->lng =  -4.2955400;
        $c->name = "Castaway Cove";
        $c->description = "A cool crag";
        $c->tidal_range = 2;
        $c->orientation = "n";
        $c->approach_time = 40;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 6;
        $c->save();

        //Crag Id = 13
        $c = new Crag();
        $c->lat = 51.5682950;
        $c->lng =  -4.0372120;
        $c->name = "Caswell Bay - Far South Slab";
        $c->description = "A cool crag";
        $c->tidal_range = 2;
        $c->orientation = "s";
        $c->approach_time = 15;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 13;
        $c->save();

        //Crag Id = 14
        $c = new Crag();
        $c->lat = 51.5687150;
        $c->lng =  -4.0366110;
        $c->name = "Caswell Bay - Great Slab";
        $c->description = "A cool crag";
        $c->tidal_range = 2;
        $c->orientation = "se";
        $c->approach_time = 10;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 13;
        $c->save();

        //Crag Id = 15
        $c = new Crag();
        $c->lat = 51.5684800;
        $c->lng =  -4.0368930;
        $c->name = "Caswell Bay - Yellow Flecked Slab";
        $c->description = "A cool crag";
        $c->tidal_range = 2;
        $c->orientation = "s";
        $c->approach_time = 10;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 13;
        $c->save();

        //Crag Id = 16
        $c = new Crag();
        $c->lat = 51.5612890;
        $c->lng =  -4.2816520;
        $c->name = "Catacomb Gully";
        $c->description = "A cool crag";
        $c->tidal_range = null;
        $c->orientation = "s";
        $c->approach_time = 40;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 7;
        $c->save();

        //Crag Id = 17
        $c = new Crag();
        $c->lat = 51.6466250;
        $c->lng =  -4.0649930;
        $c->name = "Cefnstylle Quarry";
        $c->description = "A cool crag";
        $c->tidal_range = null;
        $c->orientation = "ne";
        $c->approach_time = 5;
        $c->seepage = true;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 14;
        $c->save();

        //Crag Id = 18
        $c = new Crag();
        $c->lat = 51.5720600;
        $c->lng =  -3.9906000;
        $c->name = "Conservative Club Crag";
        $c->description = "A cool crag";
        $c->tidal_range = null;
        $c->orientation = "se";
        $c->approach_time = 5;
        $c->seepage = true;
        $c->midges = true;
        $c->sheltered = false;
        $c->area_id = 13;
        $c->save();

        //Crag Id = 19
        $c = new Crag();
        $c->lat = 51.5646300;
        $c->lng =  -3.9983500;
        $c->name = "Crab Island";
        $c->description = "A cool crag";
        $c->tidal_range = 3;
        $c->orientation = "s";
        $c->approach_time = 15;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 13;
        $c->save();

        //Crag Id = 20
        $c = new Crag();
        $c->lat = 51.53930;
        $c->lng =  -4.21423;
        $c->name = "Culver Hole";
        $c->description = "A cool crag";
        $c->tidal_range = 3;
        $c->orientation = "s";
        $c->approach_time = 15;
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
        $c->lng =  -4.11139;
        $c->name = "Three Cliffs";
        $c->description = "A cool crag";
        $c->tidal_range = 3;
        $c->orientation = "s";
        $c->approach_time = 30;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = true;
        $c->area_id = 11;
        $c->save();

        //Crag Id = 22
        $c = new Crag();
        $c->lat = 51.568593;
        $c->lng =  -4.122941;
        $c->name = "Great Tor Proper";
        $c->description = "A cool crag";
        $c->tidal_range = null;
        $c->orientation = "se";
        $c->approach_time = 30;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 10;
        $c->save();

        //Crag Id = 23
        $c = new Crag();
        $c->lat = 51.549429;
        $c->lng =  -4.253615;
        $c->name = "Juniper Wall";
        $c->description = "A cool crag";
        $c->tidal_range = null;
        $c->orientation = "s";
        $c->approach_time = 30;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 8;
        $c->save();

        //Crag Id = 24
        $c = new Crag();
        $c->lat = 51.564963;
        $c->lng =  -4.092269;
        $c->name = "Foxhole Cave";
        $c->description = "A cool crag";
        $c->tidal_range = null;
        $c->orientation = "s";
        $c->approach_time = 30;
        $c->seepage = true;
        $c->midges = false;
        $c->sheltered = true;
        $c->area_id = 12;
        $c->save();

        //Crag Id = 25
        $c = new Crag();
        $c->lat = 51.566724;
        $c->lng =  -4.3003771;
        $c->name = "Trial Wall";
        $c->description = "A cool crag";
        $c->tidal_range = null;
        $c->orientation = "w";
        $c->approach_time = 10;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 6;
        $c->save();
		
		//Crag Id = 26
        $c = new Crag();
        $c->lat = 53.089797;
        $c->lng =  -4.049363;
        $c->name = "Cromlech Boulders";
        $c->description = "Hidden Wall Area";
        $c->tidal_range = null;
        $c->orientation = "n";
        $c->approach_time = 15;
        $c->seepage = false;
        $c->midges = true;
        $c->sheltered = false;
        $c->area_id = 17;
        $c->save();


    }
}
