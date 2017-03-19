<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 19/03/2017
 * Time: 16:49
 */

use Illuminate\Database\Seeder;
use App\RockType;

class OrientationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rockTypes')->delete();

        


    }

}