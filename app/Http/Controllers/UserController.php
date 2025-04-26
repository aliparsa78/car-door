<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        if(Auth::user()->user_type==='user'){
            return view('Frontend.index');
        }else{
            return view('Backend.index');
        }
    }
}
