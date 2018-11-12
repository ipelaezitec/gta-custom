<?php

namespace gta\Http\Controllers;

use gta\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id) {
        $user = User::find($id);

        return view('profile.index', compact('user'));
    }
}
