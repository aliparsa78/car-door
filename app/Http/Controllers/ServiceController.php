<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::get();
        return view('Backend/Services/index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend/Services/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $serice = new Service;
        $serice->service = $request->service;
        $serice->description = $request->description;
        if($request->hasFile('image')){
            $image = $request->image;
            $filename = time().'.'.$image->getClientOriginalExtension();
            $filepath = $image->storeAs('Service',$filename,'public');
            $serice->icon = $filename;
        }
        $serice->save();
        return redirect('/service')->with('success','Service add successfuly !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::find($id);
        return view('Backend/Services/edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $serice =  Service::find($id);
        $serice->service = $request->service;
        $serice->description = $request->description;
        $serice->status = $request->status;
        if($request->hasFile('image')){
            $image = $request->image;
            $filename = time().'.'.$image->getClientOriginalExtension();
            $filepath = $image->storeAs('Service',$filename,'public');
            $serice->icon = $filename;
        }
        $serice->update();
        return redirect('/service')->with('success','Service updated successfuly !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $founder = Service::find($id);
        $founder->delete();
        return back()->with('danger','Service deleted succesfuly !');
    }
}
