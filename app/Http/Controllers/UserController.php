<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CarCategory;
use App\Models\Car;
use App\Models\Founder;
use App\Models\Service;
use App\Models\Subscribe;
use App\Models\User;
use Carbon\Carbon;

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
            $services = Service::where('status','active')->get();
            return view('Frontend.index',compact('cars','categories','allfounders','founders','services'));
        }else{
            // User login as admin
           $users = User::where('user_type','user')->count();

           $now = Carbon::now();

           $old_users = User::where('created_at', '<',$now->subDays(7))->where('user_type','user')->count();
           $new_user = User::where('created_at', '>=',$now->subDays(7))->count();
        //    Tow weeks ago
           $startOfLastWeek = $now->copy()->subWeek()->startOfWeek();
           $endOfLastWeek = $now->copy()->subWeek()->endOfWeek();
           $lastWeek = User::whereBetween('created_at',[$startOfLastWeek,$endOfLastWeek])->count();
           
           if($new_user>0){
               $percentage = round($new_user/($old_users+$new_user)*100,2);
           }else{
               $percentage = round(($new_user - $lastWeek/$users)*100,2);
           }
        //    Subscribers
        $subscribers = Subscribe::count();
        
            return view('Backend.index', compact('users','percentage','subscribers'));
        }
    }

    public function dashboard(Request $request)
    {
        return "user dashboard";
    }
    public function about(){
        $categories = CarCategory::take(3)->get();
        $founders = Founder::take(4)->get();
        return view('Frontend/about',compact('categories','founders'));
    }
    public function service()
    {
        $services = Service::get();
        

        return view('Frontend.service',compact('services'));
    }
}
