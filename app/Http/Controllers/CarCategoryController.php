<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarCategory;

class CarCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = CarCategory::get();
        return view('Backend/Car/Category/index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend/Car/Category/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new CarCategory();
        $category->name = $request->name;
        $category->available = $request->available;
        $category->save();
        return redirect('/car_category')->with('success','CarCategory added successfuly !');
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
        $category = CarCategory::find($id);
        return view('Backend/Car/Category/edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = CarCategory::find($id);
        $category->name = $request->name;
        $category->available = $request->available;
        $category->update();
        return redirect('/car_category')->with('success','CarCategory added successfuly !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = CarCategory::find($id);
        if($category)
        {
            $category->delete();
            return back()->with('success','CatCategory has been deleted successfuly !');
        }else{
            return back()->with('danger','Something went wrong!');
        }
    }
}
