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
            $record = ["id" => $area->id, "name" => $area->name, "parentName" => $area->getParentAreaName(), "parentId" => $area->parentArea];
            $data[] = $record;
        }

        sleep(2);

        return response()->json($data);

    }
    public function api_getCragsAtArea($area)
    {
        return $area->crags;
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

    public function api_store(Request $request)
    {
        $area = new Area;

        $area->name = $request->input('name');
        $area->parentArea = $request->input('parentArea');
        $area->save();

        return response()->json(array('success' => true));


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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Area $area
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $area)
    // {
    //     //
    // }

    public function api_update(Request $request, $area)
    {
        $area->name = $request->input('name');
        $area->parentArea = $request->input('parentArea');

        $area->save();

        return response()->json(array('success' => true));

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
