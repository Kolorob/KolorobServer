<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiConstants;
use App\Models\Education\EducationServiceProvider;
use App\Models\Education\EducationServiceProviderCourse;
use App\Models\Education\EduExamFees;
use App\Models\Education\EduResults;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr2 = EducationServiceProvider::get();
        $arr = array();
        $i = 0;
        foreach($arr2 as $a)
            $arr[$i++] = $a;
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
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
	public function course()

	{
	$arr3 = EducationServiceProviderCourse::get();
        $arrx = array();
        $i = 0;
        foreach($arr3 as $a)
            $arrx[$i++] = $a;
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arrx)
        );

	}
    public function result()

    {
    $arr3 = EduResults::get();
        $arrx = array();
        $i = 0;
        foreach($arr3 as $a)
            $arrx[$i++] = $a;
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arrx)
        );

    }
    public function fees()

    {
    $arr3 = EduExamFees::get();
        $arrx = array();
        $i = 0;
        foreach($arr3 as $a)
            $arrx[$i++] = $a;
        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arrx)
        );

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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}

