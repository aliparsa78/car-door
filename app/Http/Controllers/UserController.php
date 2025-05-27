<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\CarCategory;
use App\Models\Car;
use App\Models\Founder;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if( !Auth::user()  ||Auth::user()->user_type==='user' ){
            $categories = CarCategory::all();
           if($request->has('category') && $request->category != 'all')
           {
            $cars = Car::where('category_id',$request->category)->get();
            
           }else {

               $cars = Car::all();
           }
        
           if($request->has('founder')){
            
                $founders = Founder::where('id',$request->founder)->get();
           }

            $allfounders = Founder::get();
            return view('Frontend.index',compact('cars','categories','allfounders','founders'));
        }else{
           
            return view('Backend.index');
        }
    }

    public function dashboard(Request $request)
    {
        return "user dashboard";
    }
}
