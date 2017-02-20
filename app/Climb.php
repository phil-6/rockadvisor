<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Climb extends Model
{
    protected $table = 'climbs';

    protected $fillable = [];

    /**
     * Get the crag that this route is part of.
     */
    public function crag()
    {
        return $this->belongsTo('App\Crag', 'crag_id', 'id');
    }

}