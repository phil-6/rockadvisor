<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AreasTableSeeder::class);
        $this->call(OrientationsTableSeeder::class);
        $this->call(RockTypesTableSeeder::class);
        $this->call(CragsTableSeeder::class);
        //$this->call(ParkingLocationSeeder::class);
        //$this->call(CragParkingSeeder::class);
        $this->call(ClimbTypeNamesTableSeeder::class);
        $this->call(ClimbTypeSystemsTableSeeder::class);
        $this->call(ClimbTypesTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(ToposTableSeeder::class);
        $this->call(ClimbsTableSeeder::class);
    }
}
