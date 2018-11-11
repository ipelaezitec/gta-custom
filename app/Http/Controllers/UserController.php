<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\User;

class UserController extends Controller
{
    
    // para mostrar todos los users en el panel
    public function showUsers()
    {
        
        $users = User::paginate(50);
        
        // Todo : Necesito mostrar el state en panel/users y panel/user
        // foreach ($users as $user){
        //     $states[] = $user->state;
        // }
        
        return view('panel.users',[
            'users'=>$users,

        ]);
    }

    // para mostrar un solo usuario en /panel/users/<slug>
    public function showUser($userId)
    {   
        // $user=User::where('username', $username)->first();
        $user=User::find($userId);
        // dd($user->application->explanation);
        return view('panel.user',[
            'user'=>$user,
            ]);
    }

}
