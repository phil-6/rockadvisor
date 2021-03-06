<?php
/**
 * Created by PhpStorm.
 * User: philr
 * Date: 20/02/2017
 * Time: 23:11
 */

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Grade;

class GradesController extends Controller
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
        $grades = Grade::all();
        foreach ($grades as  $grade) {
            $record = [
                "id" => $grade->id,
                "climbTypeId" => $grade->climbTypeId,
                "severityGrade" => $grade ->severityGrade,
                "technicalGrade" => $grade->technicalGrade,
                "climbTypeSystem" => $grade->climbType->climbTypeSystem->name,
                "climbTypeName" => $grade->climbType->climbTypeName->name
                ];
            $data[] = $record;
        }

        return response()->json($data);

    }

    /**
     * Get Grades of specific type
     */
//    public function api_indexOfType($type_id)
//    {
//        $data = [];
//        $grades = Grade
//    }

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

        try {
            $grade = new Grade;
            $grade->climbTypeId = $request->input('climbTypeId');
            $grade->severityGrade = $request->input('severityGrade');
            $grade->technicalGrade = $request->input('technicalGrade');
            $grade->save();

            return response()->json(array('success' => true));

        } catch (Exception $e) {
            return response()->json(array('success' => false));
        }
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

    public function api_show($grade)
    {
        return response()->json($grade);
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

    public function api_update($grade)
    {
        //
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

    public function api_destroy($grade)
    {
        //
    }

}