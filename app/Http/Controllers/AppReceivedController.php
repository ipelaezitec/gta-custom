<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\Application;

class AppReceivedController extends Controller
{
    public function showAppsReceived()
    {

        $appsReceived = Application::paginate(50);
        
        // foreach ($users as $user){
        //     $states[] = $user->state;
        // }
        
        return view('panel.appreceived',[
            'appsReceived'=>$appsReceived,

        ]);

        // return view('panel.appreceived',[]);
    }

    public function showSingleApp($applicationId)
    
    {
        return view('panel.singleapp',[]);
    }
}
