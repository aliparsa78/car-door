<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Founder;

class FounderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $founders = Founder::get();
        return view('Backend.Founders.index',compact('founders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend/Founders/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $founder = new Founder();
        $founder->name = $request->name;
        $founder->lastname = $request->lastname;
        $founder->description = $request->description;
        if($request->hasFile('image'))
        {
            $image = $request->image;
            $filename = time().'.'.$image->getClientOriginalExtension();
            $filepath = $image->storeAs('Founders',$filename,'public');
            $founder->photo = $filename;
            $founder->save();
            return redirect('/founder')->with('success','Founder added successfuly !');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $founder = Founder::find($id);
        return view('Backend.Founders.edit',compact('founder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $founder =  Founder::find($id);
        $founder->name = $request->name;
        $founder->lastname = $request->lastname;
        $founder->description = $request->description;
        if($request->hasFile('image'))
        {
            $image = $request->image;
            $filename = time().'.'.$image->getClientOriginalExtension();
            $filepath = $image->storeAs('Founders',$filename,'public');
            $founder->photo = $filename;
        }
        $founder->update();
        return redirect('/founder')->with('success','Founder updated successfuly !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $founder = Founder::find($id);
        if($founder)
        {
            $founder->delete();
            return back()->with('success','Founder Deleted Successfuly ');
        }else{
            return back()->with('danger','Something went wrong !');
        }
    }
}
