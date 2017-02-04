<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = 'routes';

    protected $fillable = [];

    /**
     * Get the crag that this route is part of.
     */
    public function crag()
    {
        return $this->belongsTo('App\Crag', 'crag_id', 'id');
    }

}