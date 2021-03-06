<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\User;
use gta\Answer;
use gta\Question;
use gta\Application;

use gta\Role;
use Auth;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    // para mostrar todos los users en el panel
    public function showUsers()
    {
        Auth::user()->authorizeRoles(['SuperAdmin', 'Admin']);

        $users = User::paginate(50);

    

        

        return view('panel.users',compact('users'));
    }

    // para mostrar un solo usuario en /panel/users/id
    public function showUser($userId)
    {   
        Auth::user()->authorizeRoles(['SuperAdmin', 'Admin']);

        
        $user=User::find($userId);

        if (isset($user->application->id)) {
            $answers = Answer::where('application_id',$user->application->id)->get();
        }
        $roles = Role::all();

        return view('panel.user',compact('user','answers','roles'));
    
    }

    public function deleteUser($userId){
        Auth::user()->authorizeRoles('SuperAdmin');

        $user = User::find($userId);
        if ($userId != 1) {
            $user->delete();
        }
        return redirect('/panel/users');
        // todo : con ->with podría poner que el usuario se borró exitosamente.
    }

    public function changeRole(Request $request)
    {   
        //return $request->all();
        $userid = $request->input('userid');
        $roleid = (int) $request->input('role');

        $user = User::find($userid);

        $user->roles()->detach();
        $user->roles()->attach($roleid);

        return redirect()->route('user', ['id' => $userid]);
    }

}
