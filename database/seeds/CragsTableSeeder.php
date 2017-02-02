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
        $c->save();

        $c = new Crag();
        $c->name = "Great Tor";
        $c->save();

        $c = new Crag();
        $c->name = "Fox Hole";
        $c->save();
    }
}
