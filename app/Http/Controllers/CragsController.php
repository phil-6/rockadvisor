<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 16/02/2017
 * Time: 14:16
 * Edited: 09/03/17
 */

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Crag;

class CragsController extends Controller
{

    //============================================================
    //GET REQUESTS
    //============================================================


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $areas = Area::orderBy('name')->get();
    //     return view('areas.index', compact('areas'));
    // }

    public function api_index()
    {
        $data = [];
        $crags = Crag::all();
        foreach ($crags as  $crag) {
            $record = [
                "id" => $crag->id,
                "name" => $crag->name,
                "area" => $crag->area->name];
            $data[] = $record;
        }

        return response()->json($data);

    }

    public function app_api_index()
    {
        $crags = Crag::all();
        return response()->json($crags);
    }

    /**
     * Display the specified resource.
     *
     * @param  Crag  $crag
     * @return \Illuminate\Http\Response
     */
    // public function show(Area $area)
    //
    // }


    //note to phil -> this works!!! Don't change it. From Phil
    public function api_show($crag)
    {
        return response()->json($crag);
    }

    public function api_getClimbsAtCrag($crag)
    {
        return $crag->climbs;
    }



    public function api_getGradesAtCrag($crag)
    {
        return $crag->gradesAtCrag();
    }

    public function api_climbTypeIdsAndNames($crag)
    {
        return $crag->climbTypeIdsAndNames();
    }


    //============================================================
    //POST REQUESTS
    //============================================================

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //dd($request->all());

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function api_store(Request $request)
    {

        try {
            $crag = new Crag;

            $crag->lat = $request->input('cragLat');
            $crag->lng = $request->input('cragLng');
            $crag->name = $request->input('cragName');
            $crag->description = $request->input('cragDescription');
            $crag->tidalRange = $request->input('cragTidalRange');
            $crag->approachTime = $request->input('cragApproachTime');
            $crag->approachDetails = $request->input('cragApproach');
            $crag->accessInformation = $request->input('cragAccess');

            $crag->seepage = $request->input('seepage');
            $crag->midges = $request->input('midges');
            $crag->sheltered = $request->input('sheltered');

            $crag->rockType_id = $request->input('cragRockType');
            $crag->orientation_id = $request->input('cragOrientation');
            $crag->area_id = $request->input('cragArea');

            //dd($crag);
            $crag->save();
            return response()->json(array('success' => true));
        }
        catch(Exception $e){
            return response()->json(array('success' => false));
        }


    }


    /**
     * * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function api_update(Request $request, $id)
    {

        try {
            $crag = crag::find($id);

            $crag->lat = $request->input('cragLat');
            $crag->lng = $request->input('cragLng');
            $crag->name = $request->input('cragName');
            $crag->description = $request->input('cragDescription');
            $crag->tidalRange = $request->input('cragTidalRange');
            $crag->approachTime = $request->input('cragApproachTime');
            $crag->approachDetails = $request->input('cragApproach');
            $crag->accessInformation = $request->input('cragAccess');

            $crag->seepage = $request->input('seepage');
            $crag->midges = $request->input('midges');
            $crag->sheltered = $request->input('sheltered');

            $crag->rockType_id = $request->input('cragRockType');
            $crag->orientation_id = $request->input('cragOrientation');
            $crag->area_id = $request->input('cragArea');

            //dd($crag);
            $crag->save();
            return response()->json(array('success' => true));
        }
        catch(Exception $e){
            return response()->json(array('success' => false));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $crag object
     * @return \Illuminate\Http\Response
     */

    // public function destroy($id)
    // {
    //     //
    // }


    public function api_destroy($crag)
    {
        try {
            $crag->delete();
            return response()->json(array('success' => true));
        } catch(Exception $e){
            return response()->json(array('success' => false));
        }
    }

}