<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\User;

class UserController extends Controller
{
    
    // para mostrar todos los users en el panel
    public function showUsers()
    {
        // $posts = Post::all();
        // $posts = Post::latest()->paginate(10);
        $users = User::paginate(50);
        
        // foreach ($posts as $post){
        //     $usuario[] = $post->user;
        // }
        
        return view('panel.users',[
            'users'=>$users,

        ]);
    }

    // para mostrar un solo usuario en /panel/users/<slug>
    public function showUser($userId)
    {   
        // $user=User::where('username', $username)->first();

        // $posts=Post::where('user_id', $user->id)->paginate(10);
        
        return view('panel.show',[
            'user'=>$user,
            'posts'=>$posts
            ]);
        return view('panel.user',[]);
    }

}
