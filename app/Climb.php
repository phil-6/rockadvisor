<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Climb extends Model
{
    protected $table = 'climbs';

    protected $fillable = [];

    /**
     * Get the crag that this climb is part of.
     */
    public function crag()
    {
        return $this->belongsTo('App\Crag', 'crag_id', 'id');
    }

    /**
     *  Get the grade for this climb
     */

    public function grade()
    {
        return $this->belongsTo('App\Grade', 'grade_id', 'id');
    }

}