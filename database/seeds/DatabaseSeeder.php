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
         $this->call(CragsTableSeeder::class);
         $this->call(RoutesTableSeeder::class);
         $this->call(RouteTypeNameTableSeeder::class);
         $this->call(RouteTypeSystemTableSeeder::class);
         $this->call(RouteTypeTableSeeder::class);
         $this->call(GradesTableSeeder::class);
    }
}
