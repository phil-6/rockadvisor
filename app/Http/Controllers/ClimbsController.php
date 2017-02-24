<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 20/02/2017
 * Time: 22:54
 */

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Climb;


class ClimbsController extends Controller

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
        $climbs = Climb::all();
        foreach ($climbs as  $climb) {
            $record = ["id" => $climb->id, "name" => $climb->name];
            $data[] = $record;
        }

        return response()->json($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  Climb  $climb
     * @return \Illuminate\Http\Response
     */
    // public function show(Area $area)
    //
    // }

    public function api_show($climb)
    {
        return response()->json($climb);
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
        //
    }

    public function api_store(Request $request)
    {
        $climb = new Climb;

        $climb->name = $request->input('name');
        $climb->description = $request->input('description');
        $climb->length = $request->input('length');
        //$climb->grade_id = $request->input('grade_id');
        //$climb->topo_id = $request->input('topo_id');
        $climb->crag_id = $request->input('crag_id');

        $climb->save();
        return response()->json(array('success' => true));

        //Not sure if this will work
        /*Area::create(array(
            'name' => Input::get('name'),
            'parentArea' => Input::get('parentArea')
        ));*/
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

        $climb = climb::find($id);

        $climb->name = $request->input('name');
        $climb->description = $request->input('description');
        $climb->length = $request->input('length');
        $climb->grade_id = $request->input('grade_id');
        //$climb->topo_id = $request->input('topo_id');
        $climb->crag_id = $request->input('crag_id');

        $climb->save();

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

    public function api_destroy($climb)
    {
        $climb->delete();
        return response()->json(array('success' => true));
    }




}