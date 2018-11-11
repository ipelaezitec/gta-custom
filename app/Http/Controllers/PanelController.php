<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\Customization;
use gta\Auth;

class PanelController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $custom = Customization::find(1);
        return view('panel.index',compact('custom'));
    }
}
