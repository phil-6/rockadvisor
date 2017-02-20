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
        $g->climbTypeId = 1;
        $g->technical_grade = null;
        $g->severity_grade = null;
        $g->score = null;
        $g->save();
			
		foreach( $technical_grades as $techGradeValue){
			foreach( $severity_grades as $sevGradeValue){
				$g = new Grade();
				$g->climbTypeId = 1;
				$g->technical_grade = $techGradeValue;
				$g->severity_grade = $sevGradeValue;
				$g->score = null;
				$g->save();
			}
		}
		
		//French Sport
		$french_sport_grades = array(
			"1", "2", "2+", "3", "3+", "4a", "4b", "4c",
			"5a", "5b", "5c", "6a", "6a+", "6b", "6b+",
			"6c", "6c+", "7a", "7a+", "7b", "7b+", "7c",
			"7c+", "8a", "8a+", "8b", "8b+", "8c", "8c+",
			"9a", "9a+", "9b", "9b+", "9c", "9c+", null
		);
		
		foreach( $french_sport_grades as $frSportGrade){
			$g = new Grade();
			$g->climbTypeId = 2;
			$g->technical_grade = $frSportGrade;
			$g->severity_grade = null;
			$g->score = null;
			$g->save();
		}
			
		//Bouldering V-Grades
		$bouldering_vgrades = array(
			"VE", "VM", "VB", "V0-", "V0", "V0+", "V1",
			"V2", "V2+", "V3", "V3+", "V4", "V4+", "V5", 
			"V5+", "V6", "V6+", "V7", "V7+", "V8", "V8+", 
			"V9", "V10", "V11", "V12", "V13", "V14", "V15",
			"V16", "V17", null
		);
		
		foreach( $bouldering_vgrades as $vBoulderingGrade){
			$g = new Grade();
			$g->climbTypeId = 3;
			$g->technical_grade = $vBoulderingGrade;
			$g->severity_grade = null;
			$g->score = null;
			$g->save();
		}
		
		//Bouldering Font
		$bouldering_font_grades = array(
			"f2", "f2+", "f3", "f3+", "f4", "f4+", "f5",
			"f5+", "f6A", "f6A+", "f6B", "f6B+", "f6C", "f6C+",
			"f7A", "f7A+", "f7B", "f7B+", "f7C", "f7C+", "f8A",
			"f8A+", "f8B", "f8B+", "f8C", "f8C+", "f9A", null
		);
		
		foreach( $bouldering_font_grades as $fontBoulderingGrade){
			$g = new Grade();
			$g->climbTypeId = 4;
			$g->technical_grade = $fontBoulderingGrade;
			$g->severity_grade = null;
			$g->score = null;
			$g->save();
		}
    }
}
