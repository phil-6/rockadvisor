<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 04/04/2017
 * Time: 14:29
 */

use Illuminate\Database\Seeder;
use App\Topo;

class ToposTableSeeder extends Seeder
{

    public function run(){
        DB::table('topos')->delete();

        $t = new Topo();
        $t -> save();

        $t = new Topo();
        $t -> save();

        $t = new Topo();
        $t -> save();

    }


}