<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Subscribe;
use App\Models\User;

class SubscribeController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check())
        {
            $user_id = Auth::user()->id;
            $subscribed = Subscribe::where('user_id',$user_id)->first();
            if($subscribed != null){
                return back()->with('danger','You have already subscribed !');
            }else{

                $subscribe = new Subscribe();
                $subscribe->user_id = $user_id;
                $subscribe->email = $request->email;
                $subscribe->save();
                return back()->with('success','Your subscription has been sent. Thank you !');   
            }
        }else{
            return redirect('/login');
        }
    }
}
