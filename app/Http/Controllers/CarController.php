<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarCategory;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
        return view('Backend.Car.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CarCategory::get();
        return view('Backend/Car/create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = new Car();
        $car->category_id = $request->category_id;
        $car->car_name = $request->car_name;
        $car->car_model = $request->car_model;
        $car->car_color = $request->car_color;
        $car->plate_number = $request->plate_number;
        $car->details = $request->details;
        $car->price_perday = $request->price_perday;
        $car->city = $request->city;
        if($request->hasFile('image')){
            $image = $request->image;
            $filename = time().'_'.$image->getClientOriginalName();
            $filePath=$image->storeAs('CarsImage', $filename , 'public');
            $car->photo = $filename;
            $car->save();
            return back()->with('success','Car information has been added successfuly ');
        }else{
            return back()->with('danger','image not selected');
        }
        
       
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
