<?php

namespace gta\Http\Controllers;

use gta\User;
use Illuminate\Http\Request;
use gta\Http\Requests\UpdateProfile;
use Auth;

class ProfileController extends Controller
{
    public function index() {

        $user = User::find(Auth::id());

        return view('profile.index', compact('user'));
    }

    public function updateProfile(UpdateProfile $request) {
        //return $request->all();
        $user = User::find(Auth::id());

        $user->name = $request->input('name');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect()->route('profile')->with('status', 'Changes saved!');;
    }

}
