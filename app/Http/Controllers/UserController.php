<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\User;
use gta\Auth;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    // para mostrar todos los users en el panel
    public function showUsers()
    {
        $users = User::paginate(50);
        // dd($users[0]->application->state_id);   

        return view('panel.users',compact('users'));
    }

    // para mostrar un solo usuario en /panel/users/<slug>
    public function showUser($userId)
    {   
        // $user=User::where('username', $username)->first();
        $user=User::find($userId);
        
        // dd($user->application);
        return view('panel.user',compact('user'));
            // 'user'=>$user,
            // ]);
    }

    public function deleteUser($userId){
        $user = User::find($userId);
        if ($userId != 1) {
            $user->delete();
        }
        return redirect('/panel/users');
        // todo : con ->with podría poner que el usuario se borró exitosamente.
    }

}
