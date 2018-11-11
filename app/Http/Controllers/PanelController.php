<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\Auth;

class PanelController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('panel.index');
    }
}
