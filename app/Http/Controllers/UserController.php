<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    // para mostrar todos los users en el panel
    public function showUsers()
    {
        return view('panel.users',[]);
    }

    // para mostrar un solo usuario en /panel/users/<slug>
    public function showUser($userId)
    {
        return view('panel.user',[]);
    }

}
