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
}
