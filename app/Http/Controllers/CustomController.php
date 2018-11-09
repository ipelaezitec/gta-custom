<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomPost;

class CustomController extends Controller
{
    public function index() {

        return view('custom.index');
    }

    public function store(StoreCustomPost $request) {

        //return $request->input('color');

        return view('custom.index');
    }
}
