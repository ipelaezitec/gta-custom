<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index()
    {
        return view('panel.index',[]);
    }
}
