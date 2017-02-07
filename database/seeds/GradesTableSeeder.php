<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('grades')->delete();

        $g = new Grade();
        $g->score = 1;
        $g->system = "British";
        $g->type = "Trad";
        $g->technical_grade ="M";
        $g->save();

        $g = new Grade();
        $g->score = 2;
        $g->system = "British";
        $g->type = "Trad";
        $g->technical_grade ="D";
        $g->save();

        $g = new Grade();
        $g->score = 3;
        $g->system = "British";
        $g->type = "Trad";
        $g->technical_grade ="HD";
        $g->save();

        $g = new Grade();
        $g->score = 4;
        $g->system = "British";
        $g->type = "Trad";
        $g->technical_grade ="VD";
        $g->save();

        $g = new Grade();
        $g->score = 5;
        $g->system = "British";
        $g->type = "Trad";
        $g->technical_grade ="HVD";
        $g->save();


    }
}
