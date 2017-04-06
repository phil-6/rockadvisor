<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Area;

class AreasController extends Controller
{
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
        $areas = Area::all();
        foreach ($areas as  $area) {
            $record = [
                "id" => $area->id,
                "name" => $area->name,
                "parentName" => $area->getParentAreaName(),
                "parentId" => $area->parentArea];
            $data[] = $record;
        }

        return response()->json($data);

    }

    //get crags at area
    public function api_getCragsAtArea($area)
    {
        return $area->crags;
    }

    //get child areas at crag
    public function api_getChildAreas($area)
    {
        return $area->getChildAreas;
    }

    /**
     * Display the specified resource.
     *
     * @param  Area  $area
     * @return \Illuminate\Http\Response
     */
    // public function show(Area $area)
    //
    // }

    public function api_show($area)
    {
        return response()->json($area);
    }

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
        //
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function api_store(Request $request)
    {
        try {
            $area = new Area;

            $area->parentArea = $request->input('parentArea');
            $area->name = $request->input('areaName');
            $area->description = $request->input('areaDescription');

            $area->save();

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
        try{
            $area = area::find($id);

            $area->name = $request->input('areaName');
            $area->description = $request->input('areaDescription');
            $area->parentArea = $request->input('parentArea');

            //dd($area);
            $area->save();

            return response()->json(array('success' => true));
        }
        catch(Exception $e) {
            return response()->json(array('success' => false));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function destroy($id)
    // {
    //     //
    // }

    public function api_destroy($area)
    {
        $area->delete();
        return response()->json(array('success' => true));
    }
}
