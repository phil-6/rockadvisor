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
    public function index()
    {
        $areas = Area::orderBy('name')->get();
        return view('areas.index', compact('areas'));
    }

    public function api_index($id = null)
    {
        //not sure if this works but it looks cool
        //return Response::json(Area::get());

        if ($id == null) {
            return Area::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
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

        return 'Area successfully created with id' . $area->id;

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
    public function show(Area $area)
    {

    }

    public function api_show(Area $area)
    {
        return Employee::find($area);
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
        $area = Area::find($id);

        $area->name = $request->input('name');
        $area->parentArea = $request->input('parentArea');

        $area->save();

        return "Success updating area #" . $area->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
    }

    public function api_destroy(Request $request)
    {
        $area = Area::find($request->input('id'));

        $area->delete();

        return "Area record successfully deleted #" . $request->input('id');

//        Not sure if this will work
//        Area::destroy($id);
//        return Response::json(array('success' => true));
    }
}
