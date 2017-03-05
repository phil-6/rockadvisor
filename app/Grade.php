<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 06/02/2017
 * Time: 14:57
 */

namespace app;

use Illuminate\Database\Eloquent\Model;


class Grade extends Model
{
    protected $table = 'grades';

    protected $fillable = [];



    /**
     * Get all the climbs of a particular grade.
     */
    public function climbsAtGrade()
    {
        return $this->hasMany ('App\Climb', 'grade_id', 'id');
    }

    /**
     * Grade has type
     */
    public function climbType()
    {
        return $this->belongsTo ('App\ClimbType', 'climbTypeId', 'id');
    }


    /**
     * Returns just a pair of climb type Id and the name connected with this Grade.
     */
    public function climbTypeIdAndName()
    {
        $climbType = $this->climbType;
        $climbTypeId = $climbType->climbTypeName->id;
        $climbTypeName = $climbType->climbTypeName->name;
        return array("id" => $climbTypeId, "name" => $climbTypeName);
    }

    /*public function gradeDetail()
    {
        $climbType = $this->climbType;
        $climbTypeId = $climbType->climbTypeName->id;
        $climbTypeName = $climbType->climbTypeName->name;
        $climbSystem =
        return array(
            "type_id" => $climbTypeId,
            "type_name" => $climbTypeName);
    }*/
}