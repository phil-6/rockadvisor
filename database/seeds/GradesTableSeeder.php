<?php

use Illuminate\Database\Seeder;
use App\Grade;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->delete();

        //British Trad
		//Technical Grade Array
		$technical_grades = array(
			"3a",
			"3b",
			"3c",
			"4a",
			"4b",
			"4c",
			"5a",
			"5b",
			"5c",
			"6a",
			"6b",
			"6c",
			"7a",
			"7b",
			"7c",
			null);
		
		//Severity Grade Array
		$severity_grades = array(
			"M",
			"D",
			"HD",
			"VD",
			"HVD",
			"MS",
			"S",
			"HS",
			"MVS",
			"VS",
			"HVS",	
			"E1",
			"E2",
			"E3",
			"E4",
			"E5",
			"E6",
			"E7",
			"E8",
			"E9",
			"E10",
			"E11",
			"E12",
			null);
		
		$g = new Grade();
        $g->routeTypeId = 1;
        $g->technical_grade = null;
        $g->severity_grade = null;
        $g->score = null;
        $g->save();
			
		foreach( $technical_grades as $techGradeValue){
			foreach( $severity_grades as $sevGradeValue){
				$g = new Grade();
				$g->routeTypeId = 1;
				$g->technical_grade = $techGradeValue;
				$g->severity_grade = $sevGradeValue;
				$g->score = null;
				$g->save();
			}
		}
    }
}
