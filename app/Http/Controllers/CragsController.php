<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 16/02/2017
 * Time: 14:16
 */

namespace app\Http\Controllers;


class CragsController extends Controller
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
        $crags = Crags::all();
        foreach ($crags as  $crag) {
            $record = ["id" => $crag->id, "name" => $crag->name];
            $data[] = $record;
        }

        return response()->json($data);

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
        $crag = new Crag;

        $crag->lat = $request->input('lat');
        $crag->lng =  $request->input('lng');
        $crag->name = $request->input('name');
        $crag->description = $request->input('description');
        $crag->tidal_range = $request->input('tidal_range');
        $crag->orientation = $request->input('orientation');
        $crag->approach_time = $request->input('approach_time');
        $crag->seepage = $request->input('seepage');
        $crag->midges = $request->input('midges');
        $crag->sheltered = $request->input('sheltered');
        $crag->area_id = $request->input('area_id');

        $crag->save();
        return response()->json(array('success' => true));

        //Not sure if this will work
        /*Area::create(array(
            'name' => Input::get('name'),
            'parentArea' => Input::get('parentArea')
        ));*/
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

    public function api_show($crag)
    {
        return response()->json($crag);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function api_update(Request $request, $id)
    {
        $crag = Crag::find($id);

        $crag->lat = $request->input('lat');
        $crag->lng =  $request->input('lng');
        $crag->name = $request->input('name');
        $crag->description = $request->input('description');
        $crag->tidal_range = $request->input('tidal_range');
        $crag->orientation = $request->input('orientation');
        $crag->approach_time = $request->input('approach_time');
        $crag->seepage = $request->input('seepage');
        $crag->midges = $request->input('midges');
        $crag->sheltered = $request->input('sheltered');
        $crag->area_id = $request->input('area_id');

        $crag->save();

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

    public function api_destroy($crag)
    {
        $crag->delete();
        return response()->json(array('success' => true));
    }

}