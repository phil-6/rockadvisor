<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 21/02/2017
 * Time: 21:22
 */

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Crag;


class MapController extends Controller
{

    public function map_api_getAllCrags()
    {
        $data = [];
        $crags = Crag::all();
        foreach ($crags as $crag){
            $record = [
                "lat" => $crag->lat,
                "lng" => $crag->lng,
                "name" => $crag->name,
                "area" => $crag->areaName(),
                "tidalRange" => $crag->tidal_range,
                "orientation" => $crag->orientation,
                "approach_time" => $crag->approach_time,
                "seepage" => $crag->seepage,
                "midges" => $crag->midges
            ];
            $data[] = $record;
        }
        return $data;
    }

    /*Possible Target formats for $data

    var locations = [
        {location: {lat: 51.5654710, lng: -4.1012290},
        title: 'Anemone Wall' ,
				area: 'Shire Combe To Watch House East',
				type: 'Trad',
				tidal: true,
				tidalRange: 0.5,
				orientation: 'ssw',
				approachTime: 20,
				seepage: false,
				midges: false,
				grades: {mod: 0,
					 diff: 1,
					 vdiff: 1,
					 severe: 1,
					 hs: 1,
					 vs: 2,
					 hvs: 2},
				restrictions: false},

    var beaches = [
    ['Bondi Beach', -33.890542, 151.274856, 4],
    ['Coogee Beach', -33.923036, 151.259052, 5],
    ['Cronulla Beach', -34.028249, 151.157507, 3],
    ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
    ['Maroubra Beach', -33.950198, 151.259302, 1]
    ];*/



}