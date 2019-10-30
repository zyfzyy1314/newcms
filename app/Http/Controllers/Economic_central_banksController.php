<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Economic_central_banks;

class Economic_central_banksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      //  $news = Economic_central_banks::all();
        
      //  return view('',);
        
      $world =  Economic_central_banks::all();
      $americas = Economic_central_banks::where('area','americas')->get();
      $europe = Economic_central_banks::where('area','europe')->get();
      $asia_pacific = Economic_central_banks::where('area','asia-pacific')->get();
      $middle_east = Economic_central_banks::where('area','middle-east')->get();
      $africa = Economic_central_banks::where('area','africa')->get();
      $group_twenty = Economic_central_banks::where('group_twenty',1)->get();
   
     
      return  view('economic_central_banks.show',compact('group_twenty','americas','europe','asia_pacific','middle_east','africa','world'));
    
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
