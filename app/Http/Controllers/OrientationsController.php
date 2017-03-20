<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 20/03/2017
 * Time: 22:49
 */
namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Orientation;


class OrientationsController extends Controller

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
        $orientations = Orientation::all();
        foreach ($orientations as $orientation) {
            $record = [
                "id" => $orientation->id,
                "name" => $orientation->name,
            ];
            $data[] = $record;
        }

        return response()->json($data);

    }

    /*public function api_getGradeDetail()
    {

    }*/

    /**
     * Display the specified resource.
     *
     * @param  Orientation $orientation
     * @return \Illuminate\Http\Response
     */
    // public function show(Area $area)
    //
    // }

    public function api_show($orientation)
    {
        return response()->json($orientation);
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
    }

    public function api_store(Request $request)
    {

        try {
            $orientation = new Orientation;
            $orientation->name = $request->input('orientationName');
            $orientation->save();
            return response()->json(array('success' => true));
        } catch (Exception $e) {
            return response()->json(array('success' => false));
        }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function api_update(Request $request, $id)
    {


        try {
            $orientation = orientation::find($id);
            $orientation->name = $request->input('orientationName');
            $orientation->save();
            return response()->json(array('success' => true));
        } catch (Exception $e) {
            return response()->json(array('success' => false));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    // public function destroy($id)
    // {
    //     //
    // }

    public function api_destroy($orientation)
    {
        try {
            $orientation->delete();
            return response()->json(array('success' => true));
        } catch (Exception $e) {
            return response()->json(array('success' => false));
        }
    }
}