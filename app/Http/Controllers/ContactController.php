<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\Customization;

class ContactController extends Controller
{
    public function index() {
        $custom = Customization::find(1);
        return view('layouts.contact', compact('custom'));
    }
}
