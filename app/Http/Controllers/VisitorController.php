<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $visitors = Visitor::latest()->get(); 
      return view('visitors.index', compact('visitors'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('visitors.create');
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
            'name'=>'required',
            'address'=>'required',
            'primarycontact'=>'required',
            'secondarycontact'=>'required',
            'guides_id'=>'required',
            'vehicles_id'=>'required',
            'packages_id'=>'required'
        ]);
        Visitors::create($request->all());
        return redirect()->route('vehicles.index') 
                         ->with('success','Visitor added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        return view('visitors.show',comapct('visitor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        return view('visitors.edit',comapct('visitor')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'primarycontact'=>'required',
            'secondarycontact'=>'required',
            'guides_id'=>'required',
            'vehicles_id'=>'required',
            'packages_id'=>'required'
        ]);
        Visitors::update($request->all());
        return redirect()->route('vehicles.index') 
                         ->with('success','Visitor is added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        $visitor->delete();
      
        return redirect()->route('visitors.index')
                         ->with('success','Visitor is deleted successfully');
    }
}
