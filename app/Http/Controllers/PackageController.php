<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::latest()->paginate(5);
    
        return view('packages.index',compact('packages'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packages.create'); //
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
            'name' => 'required',
            'details' => 'required',
            'price' => 'required',
            'availability'=>'required',
            'duration'=>'required',
            'guides_id'=>'required',
            'vehicles_id'=>'required'
            
        ]);
    
        Package::create($request->all());
     
        return redirect()->route('packages.index')
                        ->with('success','Package created successfully.'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return view('packages.show',compact('package')); //
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        return view('packages.edit',compact('package'));   //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'price' => 'required',
            'availability'=>'required',
            'duration'=>'required',
            'guides_id'=>'required',
            'vehicles_id'=>'required'
        ]);
          
        $package->update($request->all());
    
        return redirect()->route('packages.index')
                        ->with('success','package updated successfully'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
     
        return redirect()->route('packages.index')
                        ->with('success','package deleted successfully');  //
    }
}
