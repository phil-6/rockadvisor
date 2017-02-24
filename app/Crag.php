<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crag extends Model
{
    protected $table = 'crags';

    protected $fillable = [];

    /**
     * Get the area that this crag is part of.
     */
    public function area()
    {
        return $this->belongsTo('App\Area', 'area_id', 'id');
    }
    

    /**
     * Get the climbs at the crag.
     */
    public function climbs()
    {
        return $this->hasMany('App\Climb', 'crag_id', 'id')->orderBy('name');
    }



    /**
     * Returns all pairs of climb type Ids and the climb type names connected with every climb in this crag.
     */
    public function climbTypeIdsAndNames()
    {
        $allClimbTypeIdsAndNames = [];

        foreach ($this->climbs as $climb) {
            $climbTypeIdAndName = $climb->grade->climbTypeIdAndName();
            if (!in_array($climbTypeIdAndName, $allClimbTypeIdsAndNames))
            {
                $allClimbTypeIdsAndNames[] = $climbTypeIdAndName;
            }
        }

        return $allClimbTypeIdsAndNames;

    }

    public function gradesAtCrag()
    {
        $allGradesAtCrag = [];

        foreach ($this->climbs as $climb){
            $gradeId = $climb->grade->id;

            if (!in_array($gradeId, $allGradesAtCrag))
            {
                $allGradesAtCrag[] = $gradeId;
            }

        }
        return array_unique($allGradesAtCrag);

    }
}
