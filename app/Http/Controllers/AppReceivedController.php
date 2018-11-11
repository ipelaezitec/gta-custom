<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\Application;
use gta\Auth;

class AppReceivedController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function showAppsReceived()
    {

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
        
        return view('panel.singleapp');
    }
}
