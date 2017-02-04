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
     * Get the routes for the crag.
     */
    public function routes()
    {
        return $this->hasMany('App\Route', 'crag_id', 'id')->orderBy('name');
    }
}
