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
                "id" => $crag->id,
                "lat" => $crag->lat,
                "lng" => $crag->lng,
                "name" => $crag->name,
                "area" => $crag->area->name,
                "tidalRange" => $crag->tidalRange,
                "orientation" => $crag->orientation->name,
                "approachTime" => $crag->approachTime,
                "typeOfClimbs" => $crag->climbTypeIdsAndNames(),
                "numberOfClimbs" => $crag->climbs->count(),
                "seepage" => $crag->seepage,
                "midges" => $crag->midges,
                "sheltered" => $crag->sheltered
            ];
            $data[] = $record;
        }
        
        return $data;
    }


}