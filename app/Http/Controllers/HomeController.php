<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\Customimage;
use gta\User;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $user = User::find(Auth::id());
        }
         
        if (isset($user->application)) {
            $application = $user->application;
            // dd($user->application->id);
        }

        $images = Customimage::where('custom_id', 1)->get();
        
        return view('home',compact('images','application'));
    }
}
