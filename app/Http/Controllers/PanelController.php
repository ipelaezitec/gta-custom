<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\Customization;


class PanelController extends Controller
{
    public function index()
    {
        $custom = Customization::find(1);
        
        return view('panel.index',compact('custom'));
    }
}
