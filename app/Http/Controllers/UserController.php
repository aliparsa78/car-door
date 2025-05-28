<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\CarCategory;
use App\Models\Car;
use App\Models\Founder;
use App\Models\Service;

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

               $cars = Car::take(4)->get();
           }
        
           if($request->has('founder')){
            
                $founders = Founder::where('id',$request->founder)->get();
           }else{
                $founders = Founder::take(1)->get();
           }

            $allfounders = Founder::get();

            // Service
            $services = Service::get();
            return view('Frontend.index',compact('cars','categories','allfounders','founders','services'));
        }else{
           
            return view('Backend.index');
        }
    }

    public function dashboard(Request $request)
    {
        return "user dashboard";
    }
}
