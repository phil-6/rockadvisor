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
        return $this->belongsTo('App\Area', 'parentArea', 'id');
    }

    /**
     * Get the area that this area is part of.
     */
    public function getParentAreaName()
    {
        if ($this->parentArea)
        {
            return $this->getParentArea->name;
        }
        return null;
    }

    /**
     * Get the areas that this area is a parent of.
     */

    public function getChildAreas()
    {
        return $this->hasMany('App\Area', 'parentArea', 'id');
    }



    /**
     * Append Attributes
     */
    public function getParentAreaNameAttribute()
    {
        if ($this->parentArea)
        {
            return $this->getParentArea->name;
        }
        return null;
    }

    protected $hidden = ['getParentArea'];
    protected $appends = ['ParentAreaName'];

}
