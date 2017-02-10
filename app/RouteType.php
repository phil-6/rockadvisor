<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteType extends Model
{
    protected $table = 'areas';

    protected $fillable = [];

    /**
     * Get the RouteTypeSystem that this RouteType is.
     */
    public function routeTypeSystem()
    {
        return $this->belongsTo('App\RouteTypeSystem', 'routeTypeSystemId', 'id');
    }

    /**
     * Get the RouteTypeName that this RouteType is.
     */
    public function routeTypeName()
    {
        return $this->belongsTo('App\RouteTypeName', 'routeTypeNameId', 'id');
    }


}
