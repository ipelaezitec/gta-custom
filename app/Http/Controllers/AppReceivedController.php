<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\Application;
use Auth;
use gta\User;
use gta\Answer;


class AppReceivedController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function showAppsReceived()
    {
        Auth::user()->authorizeRoles(['SuperAdmin', 'Admin']);

        $appsReceived = Application::where('state_id','=',2)->paginate(50);
        
        
        // foreach ($users as $user){
        //     $states[] = $user->state;
        // }
        return view('panel.appreceived',compact('appsReceived'));
        //     'appsReceived'=>$appsReceived,

        // ]);

        // return view('panel.appreceived',[]);
    }

    public function showSingleApp($applicationId)
    {

        Auth::user()->authorizeRoles(['SuperAdmin', 'Admin']);

        $user=User::find($applicationId);

        if (isset($user->application->id)) {
            $answers = Answer::where('application_id',$user->application->id)->get();
        }

        return view('panel.singleapp',compact('user','answers'));
    }
}
