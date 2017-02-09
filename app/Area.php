<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';

    protected $fillable = [];

    /**
     * Get the crags for the area.
     */
    public function crags()
    {
        return $this->hasMany('App\Crag', 'area_id', 'id')->orderBy('name');
    }
    /**
     * Get the area that this area is part of.
     */
    public function getParentArea()
    {
        return $this->belongsTo('App\Area', 'area_id', 'id');
    }

    /**
     * Get the areas that this area is a parent of.
     */

    public function getChildAreas()
    {
        return $this->hasMany('App\Area', 'area_id', 'id');
    }//how do we extend this to recursively include all children?

}
