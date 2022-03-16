<?php

namespace App\Http\Controllers;
use App\Models\Guide;
use App\Models\Vehicle;
use App\Models\Package;
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
        $ids=Guide::get();
        $lists=Vehicle::get(); 
        $datas=Vehicle::get();
       return view('visitors.create',compact('ids','lists','datas'));
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
        Visitor::create($request->all());
        return redirect()->route('visitors.index') 
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
        return view('visitors.show',compact('visitor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        
        $ids=Guide::get();
        $lists=Vehicle::get(); 
        $datas=Vehicle::get();
        return view('visitors.edit',compact('visitor','ids','lists','datas')); //
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
        $visitor->update($request->all());
        return redirect()->route('visitors.index') 
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