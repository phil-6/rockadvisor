<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 10/05/2017
 * Time: 14:53
 */

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Crag;
use App\Area;
use App\Climb;

class AppController extends Controller
{
    public function app_api_lastUpdateTime()
    {


        $crags = Crag::latest()->get();
        $areas = Area::latest()->get();
        $climbs = Climb::latest()->get();

        $areaTime = $areas[0]->updated_at;
        $cragTime = $crags[0]->updated_at;
        $climbTime = $climbs[0]->updated_at;

        $data = [$areaTime, $cragTime, $climbTime];

        $last_data_object = collect($data)->last();
        return $last_data_object;


    }

}