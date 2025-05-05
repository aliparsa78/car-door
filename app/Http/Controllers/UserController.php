<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\CarCategory;
use App\Models\Car;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if( !Auth::user()  ||Auth::user()->user_type==='user' ){
            $cars = Car::when($request->category, function($query) use ($request){
                $query->where('category_id',$request->category);
            })->get();



            $categories = CarCategory::get();
            return view('Frontend.index',compact('cars','categories'));
        }else{
           
            return view('Backend.index');
        }
    }

    public function dashboard(Request $request)
    {
        return "user dashboard";
    }
}
