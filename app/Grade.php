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
}