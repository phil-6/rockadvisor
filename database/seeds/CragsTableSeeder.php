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

        $c = new Crag();
        $c->lat = 51.5654710;
        $c->long =  -4.1012290;
        $c->name = "Anemone Wall";
        $c->description = "A cool crag";
        $c->tidal_range = 0.5;
        $c->orientation = "ssw";
        $c->approach_time = 20;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 12;
        $c->save();

        $c = new Crag();
        $c->lat = 51.5619470;
        $c->long =  -4.0782820;
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

        $c = new Crag();
        $c->lat = 51.5861193;
        $c->long =  -4.0580303;
        $c->name = "Barland Quarry";
        $c->description = "A cool crag";
        $c->tidal_range = 0;
        $c->orientation = "n";
        $c->approach_time = 5;
        $c->seepage = true;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 14;
        $c->save();

        $c = new Crag();
        $c->lat = 51.5658020;
        $c->long =  -4.3023240;
        $c->name = "Black Buttress Left" ;
        $c->description = "A cool crag";
        $c->tidal_range = 0;
        $c->orientation = "w";
        $c->approach_time = 15;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 6;
        $c->save();

        $c = new Crag();
        $c->lat = 51.5654740;
        $c->long =  -4.3026560;
        $c->name = "Black Buttress Right";
        $c->description = "A cool crag";
        $c->tidal_range = 0;
        $c->orientation = "w";
        $c->approach_time = 15;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 6;
        $c->save();

        $c = new Crag();
        $c->lat = 51.5692640;
        $c->long =  -4.2941050;
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

        $c = new Crag();
        $c->lat = 51.5610530;
        $c->long =  -4.2823130;
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

        $c = new Crag();
        $c->lat = 51.5427040;
        $c->long =  -4.2362980;
        $c->name = "Boiler Slab";
        $c->description = "A cool crag";
        $c->tidal_range = 0;
        $c->orientation = "sw";
        $c->approach_time = 40;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 8;
        $c->save();

        $c = new Crag();
        $c->lat = 51.5620600;
        $c->long =  -4.0800950;
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

        $c = new Crag();
        $c->lat = 51.5618230;
        $c->long =  -4.0827030;
        $c->name = "Bowen's Parlour";
        $c->description = "A cool crag";
        $c->tidal_range = 0;
        $c->orientation = "s";
        $c->approach_time = 25;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 12;
        $c->save();

        $c = new Crag();
        $c->lat = 51.5623040;
        $c->long =  -4.0792050;
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

        $c = new Crag();
        $c->lat = 51.5690450;
        $c->long =  -4.2955400;
        $c->name = "Castaway Cove";
        $c->description = "A cool crag";
        $c->tidal_range = 1.5;
        $c->orientation = "n";
        $c->approach_time = 40;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 6;
        $c->save();

        $c = new Crag();
        $c->lat = 51.5682950;
        $c->long =  -4.0372120;
        $c->name = "Caswell Bay - Far South Slab";
        $c->description = "A cool crag";
        $c->tidal_range = 1.5;
        $c->orientation = "s";
        $c->approach_time = 15;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 13;
        $c->save();

        $c = new Crag();
        $c->lat = 51.5687150;
        $c->long =  -4.0366110;
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

        $c = new Crag();
        $c->lat = 51.5684800;
        $c->long =  -4.0368930;
        $c->name = "Caswell Bay - Yellow Flecked Slab";
        $c->description = "A cool crag";
        $c->tidal_range = 1.5;
        $c->orientation = "s";
        $c->approach_time = 10;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 13;
        $c->save();

        $c = new Crag();
        $c->lat = 51.5612890;
        $c->long =  -4.2816520;
        $c->name = "Catacomb Gully";
        $c->description = "A cool crag";
        $c->tidal_range = 0;
        $c->orientation = "s";
        $c->approach_time = 40;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 7;
        $c->save();

        $c = new Crag();
        $c->lat = 51.6466250;
        $c->long =  -4.0649930;
        $c->name = "Cefnstylle Quarry";
        $c->description = "A cool crag";
        $c->tidal_range = 0;
        $c->orientation = "ne";
        $c->approach_time = 5;
        $c->seepage = true;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 14;
        $c->save();

        $c = new Crag();
        $c->lat = 51.5720600;
        $c->long =  -3.9906000;
        $c->name = "Conservative Club Crag";
        $c->description = "A cool crag";
        $c->tidal_range = 0;
        $c->orientation = "se";
        $c->approach_time = 5;
        $c->seepage = true;
        $c->midges = true;
        $c->sheltered = false;
        $c->area_id = 13;
        $c->save();

        $c = new Crag();
        $c->lat = 51.5646300;
        $c->long =  -3.9983500;
        $c->name = "Crab Island";
        $c->description = "A cool crag";
        $c->tidal_range = 2.5;
        $c->orientation = "s";
        $c->approach_time = 15;
        $c->seepage = false;
        $c->midges = false;
        $c->sheltered = false;
        $c->area_id = 13;
        $c->save();

    }
}
