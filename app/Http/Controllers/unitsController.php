<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use Session;

class unitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function  __construct(){
        $this->middleware('auth');

     }

    public function index()
    {
        //create a variable to store all the units

        $units = Unit::all();

        //return a view and pass in he above variable

        return view('units.index')->withUnits($units);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
        $this->validate($request , array(

            'unit_name' => 'required|max:255', 
            'unit_code' =>  'required'

        ));

        //store in the database
        //unit is the and Units is the model
        $unit = new Unit;

        $unit -> unit_name = $request -> unit_name;
        $unit -> unit_code = $request -> unit_code;

        $unit->save();

        Session::flash('success','Unit created!');

        //redirect to another page
        return redirect()->route('units.show',$unit -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
      $unit = Unit::find($id);
      return view('units.show')->withUnit($unit);
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
