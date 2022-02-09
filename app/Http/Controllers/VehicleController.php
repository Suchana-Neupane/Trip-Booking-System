<?php

namespace App\Http\Controllers;
use App\Models\Guide;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $vehicles = Vehicle::latest()->get();
      return view ('vehicles.index', compact('vehicles')); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ids=Guide::get();
       return view('vehicles.create',compact('ids')); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicleno' => 'required',
            'vehicletypes' => 'required',
            'availability' => 'required',
            'capacity' =>'required',
            'guides_id' =>'required' 
        ]);
        Vehicle::create($request->all());

        return redirect()->route('vehicles.index') 
                        ->with('success','Vehicle added successfully.');
     }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show',compact('vehicle'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        $ids=Guide::get();
       return view('vehicles.edit', compact('vehicle','ids')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'vehicleno' => 'required',
            'vehicletypes' => 'required',
            'availability' => 'required',
            'capacity' =>'required',
            'guides_id' =>'required' 
        ]);
        $vehicle->update($request->all());

        return redirect()->route('vehicles.index') 
                        ->with('success','Vehicle updated successfully.'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
      
        return redirect()->route('vehicles.index')
                         ->with('success','Your vehicle is deleted successfully'); //
    }
}
