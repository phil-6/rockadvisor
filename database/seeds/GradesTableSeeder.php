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
		$technicalGrades = array(
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
		$severityGrades = array(
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
        $g->technicalGrade = null;
        $g->severityGrade = null;
        $g->score = null;
        $g->save();

        foreach( $severityGrades as $sevGradeValue){
			foreach( $technicalGrades as $techGradeValue){
				$g = new Grade();
				$g->climbTypeId = 1;
				$g->technicalGrade = $techGradeValue;
				$g->severityGrade = $sevGradeValue;
				$g->score = null;
				$g->save();
			}
		}
		
		//French Sport
		$frenchSportGrades = array(
			"1", "2", "2+",
            "3", "3+", "3a", "3a+", "3b", "3b+", "3c", "3c+",
            "4", "4+", "4a", "4a+", "4b", "4b+", "4c", "4c+",
            "5", "5+", "5a", "5a+", "5b", "5b+", "5c", "5c+",
            "6a", "6a+", "6b", "6b+", "6c", "6c+",
            "7a", "7a+", "7b", "7b+", "7c", "7c+",
            "8a", "8a+", "8b", "8b+", "8c", "8c+",
			"9a", "9a+", "9b", "9b+", "9c", "9c+", null
		);
		
		foreach( $frenchSportGrades as $frSportGrade){
			$g = new Grade();
			$g->climbTypeId = 2;
			$g->technicalGrade = $frSportGrade;
			$g->severityGrade = null;
			$g->score = null;
			$g->save();
		}
			
		//Bouldering V-Grades
		$boulderingVgrades = array(
			"VE", "VM", "VB", "V0-", "V0", "V0+", "V1",
			"V2", "V2+", "V3", "V3+", "V4", "V4+", "V5", 
			"V5+", "V6", "V6+", "V7", "V7+", "V8", "V8+", 
			"V9", "V10", "V11", "V12", "V13", "V14", "V15",
			"V16", "V17", null
		);
		
		foreach( $boulderingVgrades as $vBoulderingGrade){
			$g = new Grade();
			$g->climbTypeId = 3;
			$g->technicalGrade = $vBoulderingGrade;
			$g->severityGrade = null;
			$g->score = null;
			$g->save();
		}
		
		//Bouldering Font
		$boulderingFontGrades = array(
			"f2", "f2+", "f3", "f3+", "f4", "f4+", "f5",
			"f5+", "f6A", "f6A+", "f6B", "f6B+", "f6C", "f6C+",
			"f7A", "f7A+", "f7B", "f7B+", "f7C", "f7C+", "f8A",
			"f8A+", "f8B", "f8B+", "f8C", "f8C+", "f9A", null
		);
		
		foreach( $boulderingFontGrades as $fontBoulderingGrade){
			$g = new Grade();
			$g->climbTypeId = 4;
			$g->technicalGrade = $fontBoulderingGrade;
			$g->severityGrade = null;
			$g->score = null;
			$g->save();
		}
    }
}
