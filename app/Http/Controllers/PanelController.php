<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\Customization;
<<<<<<< HEAD


class PanelController extends Controller
{
    public function index()
    {
        $custom = Customization::find(1);
        
=======
use gta\Auth;

class PanelController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $custom = Customization::find(1);
>>>>>>> dev
        return view('panel.index',compact('custom'));
    }
}
