<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PanelController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        Auth::user()->authorizeRoles(['SuperAdmin', 'Admin']);

        return view('panel.index');
    }
}
