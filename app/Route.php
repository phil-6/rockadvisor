<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = 'routes';

    protected $fillable = [];

    /**
     * Get the area that this crag is part of.
     */
    /*public function area()
    {
        return $this->belongsTo('App\Area', 'area_id', 'id');
    }*/
}