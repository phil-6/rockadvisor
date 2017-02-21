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

    public function areaName()
    {
        return $this->belongsTo('App\Area', 'area_id', 'name');//this is broken
    }

    /**
     * Get the climbs at the crag.
     */
    public function climbs()
    {
        return $this->hasMany('App\Climb', 'crag_id', 'id')->orderBy('name');
    }

    /**
     * Get the grades for the crag.
     */
//    public function grades()
//    {
//        return $this->hasManyThrough('App\Route', 'crag_id', 'id');
//    }
}
