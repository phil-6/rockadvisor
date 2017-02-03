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
}
