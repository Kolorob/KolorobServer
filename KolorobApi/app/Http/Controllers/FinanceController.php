<?php

namespace App\Http\Controllers;

use App\Models\Finance\Bills;
use App\Models\Finance\FNode;
use App\Models\Finance\Insurance;
use App\Models\Finance\Loan;
use App\Models\Finance\PaymentDocs;
use App\Models\Finance\Social;
use App\Models\Finance\Transaction;
use App\Models\Finance\Tuition;
use App\Models\Finance\Tax;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ApiConstants;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $arr = array();
        $i = 0;

        $arr2 = FNode::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        

        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }
  public function bills()
    {
        //
        $arr = array();
        $i = 0;

        $arr2 = Bills::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        

        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }
      public function loan()
    {
        //
        $arr = array();
        $i = 0;

        $arr2 = Loan::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        

        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }
      public function payment()
    {
        //
        $arr = array();
        $i = 0;

        $arr2 = PaymentDocs::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        

        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }
      public function insurance()
    {
        //
        $arr = array();
        $i = 0;

        $arr2 = Insurance::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        

        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }
      public function social()
    {
        //
        $arr = array();
        $i = 0;

        $arr2 = Social::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        

        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }
      public function tax()
    {
        //
        $arr = array();
        $i = 0;

        $arr2 = Tax::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        

        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }
      public function transaction()
    {
        //
        $arr = array();
        $i = 0;

        $arr2 = Transaction::get();
        foreach($arr2 as $a)
            $arr[$i++] = $a;

        

        return ResponseController::getSuccessResponse(
            array( ApiConstants::$KEY_DATA => $arr)
        );
    }
      public function tuition()
    {
        //
        $arr = array();
        $i = 0;

        $arr2 = Tuition::get();
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

