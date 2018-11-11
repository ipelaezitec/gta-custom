<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\Customization;
use gta\Customimage;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function index()
    {
        $custom = Customization::find(1);

        $images = Customimage::where('custom_id', 1)->get();

        return view('home',compact('custom', 'images'));
    }
}
