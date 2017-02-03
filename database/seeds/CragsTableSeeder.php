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
        $c->name = "Three Cliffs";
        $c->description = "A cool crag";
        $c->lat = 100.5;
        $c->long = 100.5;
        $c->tidal_range = 2.3;
        $c->orientation = "NOR";
        $c->approach_time = 5;
        $c->seepage = 0;
        $c->midges = true;
        $c->sheltered = true;
        $c->save();

        $c = new Crag();
        $c->name = "Great Tor";
        $c->description = "A cool crag";
        $c->lat = 100.5;
        $c->long = 100.5;
        $c->tidal_range = 2.3;
        $c->orientation = "SOU";
        $c->approach_time = 5;
        $c->seepage = 0;
        $c->midges = false;
        $c->sheltered = true;
        $c->save();

        $c = new Crag();
        $c->name = "Fox Hole";
        $c->description = "A cool crag";
        $c->lat = 100.5;
        $c->long = 100.5;
        $c->tidal_range = 2.3;
        $c->orientation = "EAS";
        $c->approach_time = 9;
        $c->seepage = 0;
        $c->midges = true;
        $c->sheltered = false;
        $c->save();
    }
}
