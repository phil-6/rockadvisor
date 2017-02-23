<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClimbType extends Model
{
    protected $table = 'climbTypes';

    protected $fillable = [];

    /**
     * Get the ClimbTypeSystem that this ClimbType is.
     */
    public function climbTypeSystem()
    {
        return $this->belongsTo('App\ClimbTypeSystem', 'climbTypeSystemId', 'id');
    }

    /**
     * Get the ClimbTypeName that this ClimbType is.
     */
    public function climbTypeName()
    {
        return $this->belongsTo('App\ClimbTypeName', 'climbTypeNameId', 'id');
    }

    /**
     * Get all grades of type
     */
    public function grades()
    {
        return $this->hasMany('App\Grade', 'climbTypeId', 'id');
    }


}
